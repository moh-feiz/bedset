<?php

use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Product;


/* @var $this yii\web\View */
/* @var $model common\models\Product */


?>
<div class="product-create">

   <div class="container form-control">
       <form action="<?= Url::toRoute('product/create') ?> " method="post" enctype="multipart/form-data">

           <input class="form-control"  name="title" placeholder="Title" type="text">
          <select class="form-control"  name="type">
              <option value="<?=Product::baby?>">نوزاد</option>
              <option value="<?=Product::teenager?>">نوجوان</option>
              <option value="<?=Product::mix?>">نوزاد و نوجوان</option>
          </select>
           <input class="form-control" name="price" placeholder="Price" type="number">
           <textarea class="form-control"  name="discription" placeholder="Discription"></textarea>
           <input class="form-control"  name="priority" placeholder="Priority" type="number">
           <input  type="file" name="image">
           <button class="btn btn-primary" style="margin: 20px" type="submit">submit</button>
       </form>
   </div>

</div>
