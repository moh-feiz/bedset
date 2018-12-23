<?php

use yii\helpers\Url;

?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web') . '/css/site/index.css' ?>">
<!-- por foroush-->
<div class="container-fluid">
<div class="row">
    <div class="carousel carousel-slider height-carousel">
        <a class="carousel-item" href="#one!"><img src="<?= Yii::getAlias('@web') . '/image/package/1.jpg' ?>"></a>
        <a class="carousel-item" href="#two!"><img src="<?= Yii::getAlias('@web') . '/image/package/2.jpg' ?>"</a>
        <a class="carousel-item" href="#three!"><img src="<?= Yii::getAlias('@web') . '/image/package/3.jpg' ?>"></a>
        <a class="carousel-item" href="#four!"><img src="<?= Yii::getAlias('@web') . '/image/package/4.jpg' ?>"></a>
        <a class="carousel-item" href="#five!"><img src="<?= Yii::getAlias('@web') . '/image/package/5.jpg' ?>"></a>
    </div>
</div>
</div> <!-- por foroush-->

<section>
    <!-- package service-->
    <div class="container-fluid">
        <div class="row margin-pack shape-1 module">

            <div class="col s12 m5">
                <div class="card">
                    <div class="card-image">
                        <img src="<?= Yii::getAlias('@web') . '/image/package/teenager/1.jpg' ?>"
                             class="height-cadr-pack">
                        <a class="btn-large full-width" href="<?= Url::toRoute('product/teenager') ?>">سرویس های
                            نوجوان</a>
                    </div>
                </div>
            </div>
            <div class="col offset-m1 m6 ">
                <h2 class="center">سرویس نوجوان</h2>
                <p>سرویس های تمام چوب با بهترین متریال و متناسب برای رده ی سنی 15 تا 25 سال </p>

            </div>
        </div>
        <div class="row shape-2 module">
            <div class="col s12 m5 right ">
                <div class="card">
                    <div class="card-image">
                        <img src="<?= Yii::getAlias('@web') . '/image/package/mix/chilak.jpg' ?>"
                             class="height-cadr-pack">
                        <a class="btn-large full-width" href="<?= Url::toRoute('product/mix') ?>">سرویس های نوزاد -
                            نوجوان</a>
                    </div>
                </div>
            </div>
            <div class="col offset-m1 m6">
                <h2 class="center">سرویس نوزاد و نوجوان</h2>
                <p>سرویس های تمام چوب با بهترین متریال و متناسب برای رده ی سنی 0 تا 10 سال </p>

            </div>
        </div>

        <div class="row shape-3 module">
            <div class="col s12 m5 ">
                <div class="card">
                    <div class="card-image">
                        <img src="<?= Yii::getAlias('@web') . '/image/package/baby/rose.jpg' ?>"
                             class="height-cadr-pack">
                        <a class="btn-large full-width" href="<?= Url::toRoute('product/baby') ?>">سرویس های نوزاد</a>
                    </div>
                </div>
            </div>
            <div class="col offset-m1 m6">
                <h2 class="center">سرویس نوزاد</h2>
                <p>سرویس های تمام چوب با بهترین متریال و متناسب برای رده ی سنی 0 تا 5 سال </p>

            </div>
        </div>
    </div><!-- package service-->


    <!-- goals -->
    <div class="module container-fluid">
        <div class="row">
            <label class="bg-btn center">اهداف</label>
        </div>

        <!-- Images are from https://commons.wikimedia.org/wiki/Category:Apis_mellifera_workers_on_a_honeycomb-->
        <div class="wrapper">
            <a class="hex" href="#1">
                <h3 class="hex-title">احترام به مشتری</h3>
                <p>Body text</p>
                <p>Some further content here, with words and such, for reading</p>
                <p>Body text</p>
                <div class="hex-reveal"><img src="http://shawnmcburnie.com/codepen/bees/comb2.jpg"
                                             alt="Covered in bees!"/></div>
            </a>

            <a class="hex" href="#2">
                <h3 class="hex-title">حمل و نقل</h3>
                <p>Body text</p>
                <p>Some further content here, with words and such, for reading</p>
                <p>Body text</p>
                <div class="hex-reveal"><img src="http://shawnmcburnie.com/codepen/bees/comb3.jpg"
                                             alt="Covered in bees!"/></div>
            </a><a class="hex" href="#3">
                <h3 class="hex-title">کیفیت برتر</h3>
                <p>Body text</p>
                <p>Some further content here, with words and such, for reading</p>
                <p>Body text</p>
                <div class="hex-reveal"><img src="http://shawnmcburnie.com/codepen/bees/comb4.jpg"
                                             alt="Covered in bees!"/></div>
            </a><a class="hex" href="#4">
                <h3 class="hex-title">قیمت مناسب</h3>
                <p>Body text</p>
                <p>Some further content here, with words and such, for reading</p>
                <p>Body text</p>
                <div class="hex-reveal"><img src="http://shawnmcburnie.com/codepen/bees/comb5.jpg"
                                             alt="Covered in bees!"/></div>
            </a><a class="hex" href="#5">
                <h3 class="hex-title">خدمات پس از فروش</h3>
                <p>Body text</p>
                <p>Some further content here, with words and such, for reading</p>
                <p>Body text</p>
                <div class="hex-reveal"><img src="http://shawnmcburnie.com/codepen/bees/comb6.jpg"
                                             alt="Covered in bees!"/></div>
            </a><a class="hex" href="#6">
                <h3 class="hex-title">دوسال گارانتی</h3>
                <p>Body text</p>
                <p>Some further content here, with words and such, for reading</p>
                <p>Body text</p>
                <div class="hex-reveal"><img src="http://shawnmcburnie.com/codepen/bees/comb7.jpg"
                                             alt="Covered in bees!"/></div>
            </a><a class="hex" href="#7">
                <h3 class="hex-title">نصب رایگان</h3>
                <p>Body text</p>
                <p>Some further content here, with words and such, for reading</p>
                <p>Body text</p>
                <div class="hex-reveal"><img src="http://shawnmcburnie.com/codepen/bees/comb8.jpg"
                                             alt="Covered in bees!"/></div>
            </a>
        </div>
    </div> <!-- goals -->
    <!-- subproduct -->
    <div class="row module">
        <div class="gallery-image-list">
            <div class="image-list">
                <div class="image" style="background-image:url('<?= Yii::getAlias('@web') . '/image/bed/3.jpg' ?>')">
                  <a href="<?=Url::toRoute('subproduct/bed') ?>"><label class="btn btn-large grey darken-1">تخت</label></a>  </div>
                <div class="image" style="background-image:url('<?= Yii::getAlias('@web') . '/image/komod/3.jpg' ?>')">
                    <a href="<?=Url::toRoute('subproduct/vitrin') ?>"><label class="btn btn-large grey darken-1">کمد</label></a></div>
                <div class="image" style="background-image:url('<?= Yii::getAlias('@web') . '/image/toilet/1.jpg' ?>')">
                    <a href="<?=Url::toRoute('subproduct/table') ?>"> <label class="btn btn-large grey darken-1">میز آرایش</label></a></div>
            </div>
        </div>
    </div><!-- subproduct -->

    <!-- accessory -->
    <div class="module">
    <div class="row">
        <a class="full-width btn-large">متعلقات</a>
    </div>
    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img src="<?= Yii::getAlias('@web') . '/image/royal.jpeg' ?>" class="height-cadr-pack1">
                    <a class="btn-large full-width" href="http://royalmat.ir/" target="_blank">تشک رویال</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img src="<?= Yii::getAlias('@web') . '/image/malafe.jpg' ?>" class="height-cadr-pack1">
                    <a class="btn-large full-width" href="https://laico.co/" target="_blank">ست ملافه</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- accessory -->

</section>








<script type="text/javascript" src="<?= Yii::getAlias('@web') . '/js/site/index.js' ?>"></script>
