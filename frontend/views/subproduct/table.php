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
<div class="row">
    <?php foreach ($subs as $sub) {  ?>
        <?php $image = Subproduct::get_image_subproducts($sub['id']) ; ?>
        <div class="col m6">

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img src="http://<?= Yii::getAlias('@shared') . '/images/subproduct/' . $image['image'] ?>">

                </div>
            </div>
        </div>
    <?php } ?>
</div>

