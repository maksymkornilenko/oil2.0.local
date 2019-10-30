<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class OrderForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $country;
    public $city;
    public $address;
    public $count;
    public $total;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'country', 'city', 'address'], 'required'],
            ['email', 'email'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Der Name',
            'email' => 'E-Mail',
            'phone' => 'Der Telefonnummer',
            'country' => 'Das Land',
            'city' => 'Die Stadt',
            'address' => 'Die Adresse',
        ];
    }

}
