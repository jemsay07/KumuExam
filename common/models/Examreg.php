<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%examreg}}".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $gender
 * @property string $street
 * @property string $city
 * @property string $country
 * @property string $zip
 */
class Examreg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%examreg}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'phone', 'gender', 'street', 'city', 'country', 'zip'], 'required'],
            [['first_name', 'last_name', 'email', 'phone', 'street', 'city', 'country', 'zip'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'street' => 'Street',
            'city' => 'City',
            'country' => 'Country',
            'zip' => 'Zip',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ExamregQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ExamregQuery(get_called_class());
    }
}
