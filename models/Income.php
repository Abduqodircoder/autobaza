<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "income".
 *
 * @property int $id ID
 * @property float $summa Tushum
 * @property string|null $description Qo'shimcha ma'lumot
 * @property int|null $created_at Qo'shilgan sana
 * @property int|null $updated_at Yangilangan sana
 */
class Income extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'income';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['summa'], 'required'],
            [['summa'], 'number'],
            [['description'], 'string'],
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
            'summa' => Yii::t('yii', 'Tushum'),
            'description' => Yii::t('yii', 'Qo\'shimcha ma\'lumot'),
            'created_at' => Yii::t('yii', 'Qo\'shilgan sana'),
            'updated_at' => Yii::t('yii', 'Yangilangan sana'),
        ];
    }
}
