<?php


namespace app\models;

use yii\httpclient\Client;

class Webhook
{
    const BASE_CRM_DE_URL = 'https://crm.maldivesdreams.de';
    const PRICE = 17;
    const DELIVERY_PRICE = 5;

    public function sendOrder($id)
    {
        $order = Order::find()->where(['id' => $id])->one();
        if ($order) {
            $client = new Client();
            $response = $client->createRequest()
                ->setMethod('POST')
                ->setUrl(self::BASE_CRM_DE_URL.'/altLanding/webhook/md-de')
                ->setData([
                    'id' => $order->id,
                    'createdAt' => $order->created_at,
                    'name' => $order->name,
                    'email' => $order->email,
                    'phone' => $order->phone,
                    'country' => $order->country,
                    'city' => $order->city,
                    'address' => $order->address,
                    'count' => $order->count,
                    'paid' => $order->paid,
                    'pay_pal_id' => $order->pay_pal_id,
                    'pay_pal_url' => $order->pay_pal_url,
                    'local_pay_pal_id' => $order->local_pay_pal_id,
                    'price' => self::PRICE,
                    'delivery_price' => self::DELIVERY_PRICE,
                ])
                ->send();
            if ($response->isOk) {
                return 'ok';
            }
        }
        return false;
    }
}