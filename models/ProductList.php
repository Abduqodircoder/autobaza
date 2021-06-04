<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_list".
 *
 * @property int $id ID
 * @property string $name Mahsulot nomi
 * @property int|null $parent_id Qaysi mahsulot qismi
 * @property string|null $description Qo'shimcha ma'lumot
 *
 * @property Product[] $products
 */
class ProductList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent_id'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('yii', 'ID'),
            'name' => Yii::t('yii', 'Mahsulot nomi'),
            'parent_id' => Yii::t('yii', 'Qaysi mahsulot qismi'),
            'description' => Yii::t('yii', 'Qo\'shimcha ma\'lumot'),
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['product_id' => 'id']);
    }
}
