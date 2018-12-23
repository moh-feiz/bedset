<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Product;
use yii\helpers\Url;
use common\models\Subproduct;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<link rel="stylesheet" href="<?= Yii::getAlias('@web') . '/css/product/index.css' ?>"/>

<input type="hidden" value="<?= Url::toRoute('product/likee') ?>" id="url-product-like">
<input type="hidden" value="<?= Url::toRoute('product/comment') ?>" id="url-product-comment">


<div class="row teenager">
    <?php foreach ($products as $product) { ?>
        <?php $subproduct_info = Subproduct::get_subproduct($product['id']) ?>
        <?php $image = Product::get_image_product($product['id']) ?>
        <?php if ($product['type'] == 0) { ?>

            <div class="col m6">

                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img src="http://<?= Yii::getAlias('@shared') . '/images/product/' . $image['image'] ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"> مدل:<?= $product['title'] ?><i
                                class="material-icons right">more_vert</i></span>
                        <p> قیمت : <?= Yii::$app->formatter->asInteger($product['price']) ?></p>
                        <div class="card-content">
                            <p><?= $product['discription'] ?></p>
                        </div>
                    </div>

                    <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?= $product['title'] ?><i
                        class="material-icons right">close</i></span>
                        <table class="striped center">
                            <thead>
                            <tr>
                                <th>شرح</th>
                                <th>قیمت (تومان)</th>
                                <th>ابعاد</th>


                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($subproduct_info as $sub) { ?>
                                <tr>
                                    <td><?= $sub['type'] ?></td>
                                    <td><?= $sub['price'] ?></td>
                                    <td><?= $sub['dimention'] ?></td>


                                </tr>
                            <?php } ?>
                            </tbody>



                        </table>
                        <?php $images = Subproduct::get_image_subproduct($product['id'])?>
                        <?php foreach ($images as $img) {?>
                            <img style="width: 25%" src="http://<?= Yii::getAlias('@shared') . '/images/subproduct/' . $img['image'] ?>">
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div>

<script src="<?= Yii::getAlias('@web') . '/js/product/index.js' ?>"></script>

