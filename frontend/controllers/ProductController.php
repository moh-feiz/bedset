<?php

namespace frontend\controllers;

use Yii;
use common\models\Product;
use common\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {

        $product = Product::get_product();

        return $this->render('index', [
            'products' => $product ,
        ]);


    }
    public function actionTeenager()
    {

        $product = Product::get_product();

        return $this->render('teenager', [
            'products' => $product ,
        ]);

    }
    public function actionMix()
    {

        $product = Product::get_product();

        return $this->render('mix', [
            'products' => $product ,
        ]);
    }
    public function actionBaby()
    {

        $product = Product::get_product();

        return $this->render('baby', [
            'products' => $product ,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionLikee()
    {
        if(isset($_POST['product_id'])){
            $user_id = Yii::$app->user->id;
            $product_id = $_POST['product_id'];
            $sq = "select * from likee where user_id = $user_id and product_id = $product_id";
            $reapet = Yii::$app->db->createCommand($sq)->queryOne();
            if($reapet){
                $response = ['code'=> 400 , 'message'=>'قبلا لایک کرده اید'];
                return json_encode($response);
            }else{
                $sql="insert into likee (user_id , product_id ) values ($user_id , $product_id )";
                $insert = Yii::$app->db->createCommand($sql)->execute();
                if($insert){
                    $response = ['code'=>200 , 'message'=>'لایک شما با موفقیت ثبت شد'];
                    return json_encode($response);

                }else{
                    $response = ['code'=>400 , 'message'=>'لایک نشد'];
                    return json_encode($response);
                }

            }

     }else{
            return $this->render('error', [
                'message' => 'شما به این صفحه دسترسی ندارید',
            ]);
     }
    }

    public function actionComment(){
        if (isset($_POST['product_id'])){
            $user_id = Yii::$app->user->id;
            $product_id = $_POST['product_id'];
            $text = $_POST['text'];
            $sq = "select * from comment where user_id = $user_id and product_id = $product_id and text='$text'";
            $reapet = Yii::$app->db->createCommand($sq)->queryOne();
            if($reapet){
                $response = ['code'=> 400 , 'message'=>'کامنت تکراری است'];
                return json_encode($response);
            }else{
                $sql = "insert into comment (user_id , product_id , text) values ($user_id , $product_id , '$text')";
                $insert = Yii::$app->db->createCommand($sql)->execute();
                if($insert){
                    $response = ['code'=>200 , 'message'=>'کامنت شما با موفقیت ثبت شد'];
                    return json_encode($response);
                }else{
                    $response = ['code'=>400 , 'message'=>'کامنت شما با موفقیت ثبت نشد'];
                    return json_encode($response);
                }
            }

        }else{
            return $this->render('error', [
                'message' => 'شما به این صفحه دسترسی ندارید',
            ]);
        }
    }
}
