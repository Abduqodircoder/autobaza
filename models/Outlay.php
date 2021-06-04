<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "outlay".
 *
 * @property int $id
 * @property int|null $client_id Klient 
 * @property float|null $summa O'tkazilgan summa
 * @property string|null $description Qo'shimcha ma'lumot
 * @property int|null $created_at Qo'shilgan sana
 * @property int|null $updated_at Yangilangan sana
 */
class Outlay extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'outlay';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'created_at', 'updated_at'], 'integer'],
            [['summa'], 'number'],
            [['description'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('yii', 'ID'),
            'client_id' => Yii::t('yii', 'Klient '),
            'summa' => Yii::t('yii', 'O\'tkazilgan summa'),
            'description' => Yii::t('yii', 'Qo\'shimcha ma\'lumot'),
            'created_at' => Yii::t('yii', 'Qo\'shilgan sana'),
            'updated_at' => Yii::t('yii', 'Yangilangan sana'),
        ];
    }
}
