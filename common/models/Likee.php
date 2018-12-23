<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%likee}}".
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property int $subproduct_id
 *
 * @property User $user
 * @property Product $product
 * @property Subproduct $subproduct
 */
class Likee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%likee}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'product_id', 'subproduct_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['subproduct_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subproduct::className(), 'targetAttribute' => ['subproduct_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'subproduct_id' => Yii::t('app', 'Subproduct ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubproduct()
    {
        return $this->hasOne(Subproduct::className(), ['id' => 'subproduct_id']);
    }
}
