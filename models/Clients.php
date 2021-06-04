<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property int $id ID
 * @property string $name Tashkilot nomi
 * @property string $phone
 * @property string|null $description Tashkilot haqida qo'shimcha ma'lumot
 * @property int|null $created_at Qo'shilgan sana
 * @property int|null $updated_at Yangilangan sana
 *
 * @property Product[] $products
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 13],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('yii', 'ID'),
            'name' => Yii::t('yii', 'Tashkilot nomi'),
            'phone' => Yii::t('yii', 'Phone'),
            'description' => Yii::t('yii', 'Tashkilot haqida qo\'shimcha ma\'lumot'),
            'created_at' => Yii::t('yii', 'Qo\'shilgan sana'),
            'updated_at' => Yii::t('yii', 'Yangilangan sana'),
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['client_id' => 'id']);
    }
}
