<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pozition".
 *
 * @property int $id
 * @property string $name Sektor nomi
 * @property int|null $parent_id Tegishli bo'lgan sektor
 *
 * @property Product[] $products
 */
class Pozition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pozition';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent_id'], 'integer'],
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
            'name' => Yii::t('yii', 'Sektor nomi'),
            'parent_id' => Yii::t('yii', 'Tegishli bo\'lgan sektor'),
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['pozition_id' => 'id']);
    }
}
