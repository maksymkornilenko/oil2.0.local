<?php


namespace app\models;
use yii\helpers\Json;
use yii\httpclient\Client;

class Webhook
{

    const BASE_CRM_DE_URL = 'crm.local';
//    public function sendData($id)
//    {
//        $order = Order::find()->where(['id' => $id])->one();
//        $params=[
//            'id' => $order->id,
//            'createdAt' => $order->created_at,
//            'name' => $order->name,
//            'email' => $order->email,
//            'phone' => $order->phone,
//            'country' => $order->country,
//            'city' => $order->city,
//            'address' => $order->address,
//            'count' => $order->count,
//            'paid' => $order->paid,
//            ];
//        $content = http_build_query($params);
//        $context = stream_context_create([
//                'http' => [
//                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n" .
//                        "Content-Length: " . strlen($content) . "\r\n" .
//                        "User-Agent:MyAgent/1.0\r\n",
//                    'method' => 'POST',
//                    'content' => $content
//                ]
//            ]
//        );
//        $url = 'http://crm.local/altlanding/webhook/md-de';
//        $answerJSON = file_get_contents($url, null, $context);
//        if ($answerJSON) {
//            $answer = Json::decode($answerJSON, true);
//            if ($answer['success'] == true) {
//                $order = Orders::findOne($params['order_id']);
//                $order->updateAttributes(['status' => 1]);
//            }
//        }
//    }

    public function sendOrder($id) {
        $order = Order::find()->where(['id' => $id])->one();
        if ($order) {
            $client = new Client();
            $response = $client->createRequest()
                ->setMethod('POST')
                ->setUrl('http://crm.local/tilda/webhook/md-ru')
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
                ]);
            if($response->send()){
                var_dump('ok');
                die();
            }
            if ($response->isOk) {
                print_r('abrakadabra');
                return $response->data['status'];
            }
        }
        return false;
    }
}