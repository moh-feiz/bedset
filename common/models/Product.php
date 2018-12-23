<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product}}".
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property int $type
 * @property int $price
 * @property string $discription
 * @property int $priority
 *
 * @property Comment[] $comments
 * @property Image[] $images
 * @property Likee[] $likees
 * @property User $user
 * @property Subproduct[] $subproducts
 */
class Product extends \yii\db\ActiveRecord
{
    const baby = 0 ;
    const teenager = 1 ;
    const mix = 2 ;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'type', 'price', 'discription', 'priority'], 'required'],
            [['user_id', 'type', 'price', 'priority'], 'integer'],
            [['discription'], 'string'],
            [['title'], 'string', 'max' => 250],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'title' => Yii::t('app', 'Title'),
            'type' => Yii::t('app', 'Type'),
            'price' => Yii::t('app', 'Price'),
            'discription' => Yii::t('app', 'Discription'),
            'priority' => Yii::t('app', 'Priority'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLikees()
    {
        return $this->hasMany(Likee::className(), ['product_id' => 'id']);
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
    public function getSubproducts()
    {
        return $this->hasMany(Subproduct::className(), ['product_id' => 'id']);
    }
    static function get_product(){
        $products = Product::find()->all();
        return $products;

    }
    static function get_image_product($product_id){
       return Image::find()->where(['product_id'=> $product_id])->one();
    }
    static function get_comment_product($product_id){
        return Comment::find()->where(['product_id'=>$product_id ])->all();
    }
    static function get_like_product($product_id){
        return Likee::find()->where(['product_id'=>$product_id ])->all();
    }
    static function get_user_info($id)
    {
        return User::find()->where(['id' => $id])->One();
    }
    static function get_likes($product_id){
        $sql="SELECT count(id) FROM likee where product_id='$product_id'";
        $likes=Yii::$app->db->createCommand($sql)->queryScalar();
        return $likes;
    }

}
