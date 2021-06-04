<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int|null $product_id
 * @property int|null $pozition_id
 * @property int|null $client_id Kimdan kelgan
 * @property float|null $pricec Kelgan narxi
 * @property float|null $priceo Sotiladigan narx
 * @property float|null $score Soni(nechta kelgani)
 * @property int|null $created_at
 * @property int|null $updated_at Mahsulot qayerda turganligi
 * @property int|null $user_id Ro'yxatga olgan shaxs
 *
 * @property ProductList $product
 * @property Pozition $pozition
 * @property Clients $client
 * @property User $user
 * @property Sale[] $sales
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'pozition_id', 'client_id', 'created_at', 'updated_at', 'user_id'], 'integer'],
            [['pricec', 'priceo', 'score'], 'number'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductList::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['pozition_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pozition::className(), 'targetAttribute' => ['pozition_id' => 'id']],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['client_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('yii', 'ID'),
            'product_id' => Yii::t('yii', 'Product ID'),
            'pozition_id' => Yii::t('yii', 'Pozition ID'),
            'client_id' => Yii::t('yii', 'Kimdan kelgan'),
            'pricec' => Yii::t('yii', 'Kelgan narxi'),
            'priceo' => Yii::t('yii', 'Sotiladigan narx'),
            'score' => Yii::t('yii', 'Soni(nechta kelgani)'),
            'created_at' => Yii::t('yii', 'Created At'),
            'updated_at' => Yii::t('yii', 'Mahsulot qayerda turganligi'),
            'user_id' => Yii::t('yii', 'Ro\'yxatga olgan shaxs'),
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(ProductList::className(), ['id' => 'product_id']);
    }

    /**
     * Gets query for [[Pozition]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPozition()
    {
        return $this->hasOne(Pozition::className(), ['id' => 'pozition_id']);
    }

    /**
     * Gets query for [[Client]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[Sales]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sale::className(), ['product_id' => 'id']);
    }
}
