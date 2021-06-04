<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sale".
 *
 * @property int $id
 * @property int|null $product_id Maxsulot nomi
 * @property int|null $seller_id Sotuvchi 
 * @property float|null $selled_price Sotilgan narxi donaga
 * @property float|null $selled_count Sotilgan mahsulot soni
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Product $product
 * @property User $seller
 */
class Sale extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sale';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'seller_id', 'created_at', 'updated_at'], 'integer'],
            [['selled_price', 'selled_count'], 'number'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['seller_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['seller_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('yii', 'ID'),
            'product_id' => Yii::t('yii', 'Maxsulot nomi'),
            'seller_id' => Yii::t('yii', 'Sotuvchi '),
            'selled_price' => Yii::t('yii', 'Sotilgan narxi donaga'),
            'selled_count' => Yii::t('yii', 'Sotilgan mahsulot soni'),
            'created_at' => Yii::t('yii', 'Created At'),
            'updated_at' => Yii::t('yii', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * Gets query for [[Seller]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeller()
    {
        return $this->hasOne(User::className(), ['id' => 'seller_id']);
    }
}
