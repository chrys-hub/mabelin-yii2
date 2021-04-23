<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log".
 *
 * @property int $id_log
 * @property string $timestamp
 * @property string $action
 * @property string $user
 */
class LogModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['timestamp', 'action', 'user'], 'required'],
            [['timestamp', 'action', 'user'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_log' => 'Id Log',
            'timestamp' => 'Timestamp',
            'action' => 'Action',
            'user' => 'User',
        ];
    }
}
