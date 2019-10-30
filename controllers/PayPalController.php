<?php

namespace app\controllers;

use app\models\Order;
use app\models\OrderForm;
use app\models\Test;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

class PayPalController extends Controller
{
    public function actionIndex() {
        die;
    }
    public function actionWhTest()
    {
        //$test = new Test();
        //$test->data = json_encode($_REQUEST);
        //$test->save();
        $test = new Test();
        $test->data = '123';
        $test->save();
        return true;
    }

    public function actionGetOrder($id) {

        $order = Order::find()->where(['id' => $id])->one();
        if ($order) {
            $apiContext = $this->getApiContext(Yii::$app->params['payPal']['clientId'], Yii::$app->params['payPal']['clientSecret']);
            //$result = \PayPal\Api\Order::get('PAY-59K479710K895212PLW3P67Y', $apiContext);
            $payment = Payment::get('PAY-59K479710K895212PLW3P67Y', $apiContext);
            var_dump($payment);
        }
    }
}
