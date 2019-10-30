<?php


namespace app\models;


use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ShippingCost;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

use PayPal\Api\Address;
use PayPal\Api\BillingInfo;
use PayPal\Api\Cost;
use PayPal\Api\Currency;
use PayPal\Api\Invoice;
use PayPal\Api\InvoiceAddress;
use PayPal\Api\InvoiceItem;
use PayPal\Api\MerchantInfo;
use PayPal\Api\PaymentTerm;
use PayPal\Api\Phone;
use PayPal\Api\ShippingInfo;

use Yii;

class PayPalApi
{
    function getApiContext($clientId, $clientSecret)
    {

        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                $clientId,
                $clientSecret
            )
        );

        $apiContext->setConfig(
            array(
                //'mode' => 'sandbox',
                'mode' => 'live',
                //'log.LogEnabled' => true,
                //'log.FileName' => '../PayPal.log',
                //'log.LogLevel' => 'DEBUG', // PLEASE USE `INFO` LEVEL FOR LOGGING IN LIVE ENVIRONMENTS
                //'cache.enabled' => true,
                //'cache.FileName' => '/PaypalCache' // for determining paypal cache directory
                // 'http.CURLOPT_CONNECTTIMEOUT' => 30
                // 'http.headers.PayPal-Partner-Attribution-Id' => '123123123'
                //'log.AdapterFactory' => '\PayPal\Log\DefaultLogFactory' // Factory class implementing \PayPal\Log\PayPalLogFactory
            )
        );
        return $apiContext;
    }

    public function createPayPalOrder($id) {
        $order = Order::find()->where(['id' => $id])->one();

        $apiContext = $this->getApiContext(Yii::$app->params['payPal']['clientId'], Yii::$app->params['payPal']['clientSecret']);

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item1 = new Item();
        $item1->setName('Kosmetisches Kokosöl')
            ->setCurrency('EUR')
            ->setQuantity($order->count)
            ->setPrice(Yii::$app->params['shop']['productPrice']);

        $itemList = new ItemList();
        $itemList->setItems(array($item1));

        $details = new Details();
        $details->setShipping(Yii::$app->params['shop']['shipmentPrice'])
            ->setTax(0)
            ->setSubtotal(Yii::$app->params['shop']['productPrice'] * $order->count + Yii::$app->params['shop']['shipmentPrice']);

        //->setShippingCost(Yii::$app->params['shop']['shipmentPrice']);

        $amount = new Amount();
        $amount->setCurrency("EUR")
            ->setTotal(Yii::$app->params['shop']['productPrice'] * $order->count + Yii::$app->params['shop']['shipmentPrice'])
            ->setDetails($details);

        $localPayPalId = $order->id . '-' .uniqid();
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("")
            ->setInvoiceNumber($localPayPalId);

        $baseUrl = 'https://maldivesdreams.de';
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("$baseUrl/order-p-success?id=" . $order->id)
            ->setCancelUrl("$baseUrl/order-p-error?id=" . $order->id);


        $payment = new Payment();
        $payment->setIntent("order")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        $request = clone $payment;

        try {
            $payment->create($apiContext);
        } catch (Exception $ex) {
            return false;
            //ResultPrinter::printError("Created Payment Order Using PayPal. Please visit the URL to Approve.", "Payment", null, $request, $ex);
            //exit(1);
        }

        $approvalUrl = $payment->getApprovalLink();
        //echo $payment->getId(); die;
        //ResultPrinter::printResult("Created Payment Order Using PayPal. Please visit the URL to Approve.", "Payment", "<a href='$approvalUrl' >$approvalUrl</a>", $request, $payment);
        if ($payment->id) {
            $order->pay_pal_id = $payment->id;
            $order->pay_pal_url = $approvalUrl;
            $order->local_pay_pal_id = $localPayPalId;
            $order->save();
            return $approvalUrl;
        } else {
            return false;
        }
    }

    public function createInvoice($id) {
        //die;
        $order = Order::find()->where(['id' => $id])->one();
        $apiContext = $this->getApiContext(Yii::$app->params['payPal']['clientId'], Yii::$app->params['payPal']['clientSecret']);
        $localPayPalId = $order->id . '-' .uniqid();
        $invoice = new Invoice();
        // ### Invoice Info
        $invoice
            ->setMerchantInfo( new MerchantInfo() )
            ->setBillingInfo( array( new BillingInfo() ) )
            //->setNote( "Thank you, customer!" )
            ->setPaymentTerm( new PaymentTerm() )
            ->setShippingInfo( new ShippingInfo() )
            ->setShippingCost(new ShippingCost())
            ;//->setTerms( "By paying your invoice you are agreeing ... set your terms here");
// ### Merchant Info
        $invoice->getMerchantInfo()
            ->setEmail( "pay@upline24.org" )
            //->setFirstName( "YourFirstName" )
            //->setLastName( "YourLastName" )
            //->setbusinessName( "Your Company LLC" )
            ->setAddress( new Address() );
// The address used for creating the invoice
        $invoice->getMerchantInfo()->getAddress()
            ->setLine1( $order->address )
            ->setCity( $order->city )
            //->setState( "AK" )
            //->setPostalCode( "12345" )
            //->setCountryCode( "US" );
        ;
// ### Billing Information
// Set the email address for each billing
        $billing = $invoice->getBillingInfo();
        $billing[0]
            ->setEmail( $order->email );
// ### Items List
        $items    = array();
        $items[0] = new InvoiceItem();
        $items[0]
            ->setName( "Kosmetisches Kokosöl" )
            ->setQuantity( $order->count )
            ->setUnitPrice( new Currency() );
        $items[0]->getUnitPrice()
            ->setCurrency( "EUR" )
            ->setValue(Yii::$app->params['shop']['productPrice']);

        $items[1] = new InvoiceItem();
        $items[1]
            ->setName( "Lieferpreis" )
            ->setQuantity(1)
            ->setUnitPrice( new Currency() );
        $items[1]->getUnitPrice()
            ->setCurrency( "EUR" )
            ->setValue(Yii::$app->params['shop']['shipmentPrice']);
        /*
        if( $tax ) {
            $tax = new \PayPal\Api\Tax();
            $tax->setPercent( 4 )->setName( "Local Tax" );
            items[0]->setTax( $tax );
}*/
        $invoice->getPaymentTerm()
            ->setTermType( "NO_DUE_DATE" );
        $invoice->setItems( $items );

        //$invoice->setShippingCost(Yii::$app->params['shop']['shipmentPrice']);
        //$invoice->setShippingInfo()->setShippingCost(Yii::$app->params['shop']['shipmentPrice']);
        $invoice->setNumber($localPayPalId);
        //$invoice->setShippingCost()
// ### Logo
// You can set the logo in the invoice by providing the external URL pointing to a logo
        $invoice->setLogoUrl('https://www.paypalobjects.com/webstatic/i/logo/rebrand/ppcom.svg');

        try {
            // ### Create Invoice
            // Create an invoice by calling the invoice->create() method
            // with a valid ApiContext (See bootstrap.php for more on `ApiContext`)
            $invoice->create( $apiContext );
        } catch ( Exception $ex ) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            //ResultPrinter::printError( "Create Invoice", "Invoice", null, $request, $ex );
            exit( 1 );
        }
        if ($invoice->getId()) {
            $sendStatus = $invoice->send($apiContext);
            $order->pay_pal_id = $invoice->getId();
            $order->pay_pal_url = 'https://www.paypal.com/invoice/payerView/details/'.$invoice->getId();
            $order->local_pay_pal_id = $localPayPalId;
            $order->save();
            //$invoice->send($apiContext);
            return $order->pay_pal_url;
        } else {
            return false;
        }
        //var_dump($invoice->getId()); die;
    }
}