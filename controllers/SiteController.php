<?php

namespace app\controllers;

use app\models\Order;
use app\models\PayPalApi;
use app\models\Webhook;
use Yii;
use yii\web\Controller;


class SiteController extends Controller
{

    public function actionIndex()
    {
        $orderForm = new Order();

        if ($orderForm->load(Yii::$app->request->post())) {
            if ($orderForm->save()) {
                return $this->redirect('/order-success?id=' . $orderForm->id);
            } else {
                return $this->redirect('/order-error');
            }
        }
        return $this->render('index', ['orderForm' => $orderForm, 'mainPage' => true]);
    }

    public function actionOrderSuccess($id)
    {
        $order = Order::find()->where(['id' => $id])->one();

        if ($order) {
            if ($order->paid == 0 && $order->pay_pal_id == '') {
                $paypal = new PayPalApi();
                $approvalUrl = $paypal->createInvoice($id);//$paypal->createInvoice($id);//$paypal->createPayPalOrder($id);//
            } else if ($order->paid == 0) {
                $approvalUrl = $order->pay_pal_url;
            } else {
                $approvalUrl = false;
            }
            if ($approvalUrl) {
                Webhook::sendOrder($id);
                return $this->render('orderSuccess', ['order' => $order, 'approvalUrl' => $approvalUrl]);
            } else {
                return $this->redirect('/order-error');
            }
        } else {
            return $this->redirect('/order-error');
        }
    }

    public function actionOrderPSuccess()
    {
        return $this->render('orderSuccess');
    }

    public function actionOrderError()
    {
        return $this->render('orderError', []);
    }

    public function actionOrderPError()
    {
        return $this->render('orderError', []);
    }

    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            if ($exception->statusCode == 404) {
                return $this->render('error404', ['exception' => $exception]);
            } else {
                return $this->render('error', ['exception' => $exception]);
            }
        }
    }

}
