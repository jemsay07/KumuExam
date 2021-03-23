<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%events}}".
 *
 * @property int $id
 * @property string $event_name
 * @property string $location
 * @property string $date
 * @property string $time
 *
 * @property User $id0
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%events}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_name', 'location', 'date', 'time'], 'required'],
            [['location'], 'string'],
            [['event_name'], 'string', 'max' => 50],
            [['date', 'time'], 'string', 'max' => 255],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_name' => 'Event Name',
            'location' => 'Location',
            'date' => 'Date',
            'time' => 'Time',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EventsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EventsQuery(get_called_class());
    }
}
