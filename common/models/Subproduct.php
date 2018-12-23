<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%subproduct}}".
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property int $type
 * @property int $price
 * @property string $dimention
 *
 * @property Comment[] $comments
 * @property Image[] $images
 * @property Likee[] $likees
 * @property User $user
 * @property Product $product
 */
class Subproduct extends \yii\db\ActiveRecord
{
    const bed = 0 ;
    const shelf = 1 ;
    const buffet = 2 ;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%subproduct}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id', 'type', 'price', 'dimention'], 'required'],
            [['user_id', 'product_id', 'type', 'price'], 'integer'],
            [['dimention'], 'string', 'max' => 250],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
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
            'type' => Yii::t('app', 'Type'),
            'price' => Yii::t('app', 'Price'),
            'dimention' => Yii::t('app', 'Dimention'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['subproduct_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['subproduct_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLikees()
    {
        return $this->hasMany(Likee::className(), ['subproduct_id' => 'id']);
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
    static function get_subproduct($product_id){
        return Subproduct::find()->where(['product_id'=>$product_id])->all();
    }
    static function get_image_subproduct($product_id){
       return Image::find()->where(['product_id'=>$product_id])->all();

    }
    static function get_subproducts(){
        return Subproduct::find()->all();
    }
    static function get_image_subproducts($subproduct_id){
        return Image::find()->where(['subproduct_id'=>$subproduct_id])->one();

    }

}
