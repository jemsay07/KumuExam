<?php
namespace app\models;
use Yii;
use yii\base\Model;

class HomeContactForm extends Model
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $gender;
    public $street;
    public $city;
    public $country;
    public $zip;


    /**
     * @return array validation rules
     */
    public function rules(){
        return [
            [
                [
                    'first_name', 
                    'last_name', 
                    'email', 
                    'phone', 
                    'gender', 
                    'street', 
                    'city', 
                    'country', 
                    'zip', 
                ], 'required'
            ],
            ['email', 'email'],
            ['verifyCode'],
        ];
    }

    /**
     * @return array customized attributes labels
     */
    public function attributeLabels(){
        return = [
            'verifyCode' => 'Verification Code',
        ];
    }
}
