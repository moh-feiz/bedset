<?php

use yii\helpers\Html;
use common\models\Subproduct;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model common\models\Subproduct */


?>
<div class="subproduct-create">


        <div class="container">
            <form action="<?= Url::toRoute('subproduct/create') ?> " method="post" enctype="multipart/form-data">

                <input  class="form-control" name="product_id" placeholder="Product_id" type="number">
                <select  class="form-control" name="type">
                    <option value="<?=Subproduct::bed?>">تخت</option>
                    <option value="<?=Subproduct::shelf?>">کمد</option>
                    <option value="<?=Subproduct::buffet?>">ویترین</option>
                </select>
                <input  class="form-control" name="price" placeholder="Price" type="number">
                <input  class="form-control" name="dimention" placeholder="dimention" type="text">
                <input type="file" name="image">
                <button class="btn btn-primary" style="margin: 20px" type="submit">submit</button>
            </form>
        </div>


</div>
