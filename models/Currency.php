<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "currency".
 *
 * @property int $id ID
 * @property float|null $sum $1 hisobi bo'yicha So'm
 * @property int|null $created_at Qo'shilgan sana
 * @property int|null $updated_at Yangilangan sana
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sum'], 'number'],
            [['created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('yii', 'ID'),
            'sum' => Yii::t('yii', '$1 hisobi bo\'yicha So\'m'),
            'created_at' => Yii::t('yii', 'Qo\'shilgan sana'),
            'updated_at' => Yii::t('yii', 'Yangilangan sana'),
        ];
    }
}
