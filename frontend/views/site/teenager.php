<?php


?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web').'/css/site/teenager.css' ?>">
<div class="container">
    <?php foreach ($products as $product) { ?>

        <?php $image = Product::get_image_product($product['id']) ?>


        <div class="card">

            <div class="card-content">
                <h3>نام سرویس :<?= $product['title'] ?></h3>
            </div>
            <div class="card-image">
                <div>
                    <img id="like-<?= $product['id'] ?>" class="logo right add-like"
                         src="<?= Yii::getAlias('@web') . '/image/logo-like.png' ?>">
                    <img id="loader-<?= $product['id'] ?>" src="<?= Yii::getAlias('@web') . '/image/loader.gif' ?>"
                         class="loader logo right" style="display: none"/>
                </div>
                <img src="http://<?= Yii::getAlias('@shared') . '/images/product/' . $image['image'] ?>">
            </div>
            <div class="card-content">
                <p>قیمت : <?= $product['price'] ?></p>
                <p>توضیحات : <?= $product['discription'] ?></p>
            </div>
            <div class="card-content">
                <?php $likes=Product::get_like_product($product['id']) ?>
                <?php foreach ($likes as $like){ ?>
                    <?php $user_info = Product::get_user_info($like['user_id']) ?>
                    <span><?= $user_info['username']?></span>
                <?php  } ?>
            </div>
            <div class="card-content">
                <div id="text-comment-<?= $product['id'] ?>" style="display: none">
                    <textarea></textarea>
                    <button class="add-comment" id="add-comment-<?= $product['id'] ?>">ثبت کامنت</button>
                </div>
                <button class="comment" id="comment-<?= $product['id'] ?>">add-comment</button>
            </div>
            <div class="card-content">
                <?php $comments = Product::get_comment_product($product['id']);?>
                <?php  foreach ($comments as $comment){ ?>
                    <p><?= $comment['text'] ?></p>
                <?php } ?>
            </div>
        </div>

    <?php } ?>
</div>


<div class="row teenager">
    <div class="col m6">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?= Yii::getAlias('@web') . '/image/package/teenager/1.jpg' ?>">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">پرنسس<i class="material-icons right">more_vert</i></span>
                <p>2000000 تومان</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">پرنسس<i
                            class="material-icons right">close</i></span>
                <p>ابعاد: 180*100*80</p>
                <p>موجود</p>
                <table class="striped center">
                    <thead>
                    <tr>
                        <th>آیتم</th>
                        <th>شرح</th>
                        <th>قیمت (تومان)</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>تخت</td>
                        <td>1000000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>کمد</td>
                        <td>600000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ویترین</td>
                        <td>400000</td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <div class="col m6">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?= Yii::getAlias('@web') . '/image/package/teenager/2.jpg' ?>">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">پرنسس<i class="material-icons right">more_vert</i></span>
                <p>2000000 تومان</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">پرنسس<i
                            class="material-icons right">close</i></span>
                <p>ابعاد: 180*100*80</p>
                <p>موجود</p>
                <table class="striped center">
                    <thead>
                    <tr>
                        <th>آیتم</th>
                        <th>شرح</th>
                        <th>قیمت (تومان)</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>تخت</td>
                        <td>1000000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>کمد</td>
                        <td>600000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ویترین</td>
                        <td>400000</td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <div class="col m6">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?= Yii::getAlias('@web') . '/image/package/teenager/3.jpg' ?>">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">پرنسس<i class="material-icons right">more_vert</i></span>
                <p>2000000 تومان</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">پرنسس<i
                            class="material-icons right">close</i></span>
                <p>ابعاد: 180*100*80</p>
                <p>موجود</p>
                <table class="striped center">
                    <thead>
                    <tr>
                        <th>آیتم</th>
                        <th>شرح</th>
                        <th>قیمت (تومان)</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>تخت</td>
                        <td>1000000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>کمد</td>
                        <td>600000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ویترین</td>
                        <td>400000</td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <div class="col m6">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?= Yii::getAlias('@web') . '/image/package/teenager/4.jpg' ?>">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">پرنسس<i class="material-icons right">more_vert</i></span>
                <p>2000000 تومان</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">پرنسس<i
                            class="material-icons right">close</i></span>
                <p>ابعاد: 180*100*80</p>
                <p>موجود</p>
                <table class="striped center">
                    <thead>
                    <tr>
                        <th>آیتم</th>
                        <th>شرح</th>
                        <th>قیمت (تومان)</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>تخت</td>
                        <td>1000000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>کمد</td>
                        <td>600000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ویترین</td>
                        <td>400000</td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <div class="col m6">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?= Yii::getAlias('@web') . '/image/package/teenager/5.jpg' ?>">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">پرنسس<i class="material-icons right">more_vert</i></span>
                <p>2000000 تومان</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">پرنسس<i
                            class="material-icons right">close</i></span>
                <p>ابعاد: 180*100*80</p>
                <p>موجود</p>
                <table class="striped center">
                    <thead>
                    <tr>
                        <th>آیتم</th>
                        <th>شرح</th>
                        <th>قیمت (تومان)</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>تخت</td>
                        <td>1000000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>کمد</td>
                        <td>600000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ویترین</td>
                        <td>400000</td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <div class="col m6">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?= Yii::getAlias('@web') . '/image/package/teenager/6.jpg' ?>">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">پرنسس<i class="material-icons right">more_vert</i></span>
                <p>2000000 تومان</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">پرنسس<i
                            class="material-icons right">close</i></span>
                <p>ابعاد: 180*100*80</p>
                <p>موجود</p>
                <table class="striped center">
                    <thead>
                    <tr>
                        <th>آیتم</th>
                        <th>شرح</th>
                        <th>قیمت (تومان)</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>تخت</td>
                        <td>1000000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>کمد</td>
                        <td>600000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ویترین</td>
                        <td>400000</td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <div class="col m6">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?= Yii::getAlias('@web') . '/image/package/teenager/7.jpg' ?>">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">پرنسس<i class="material-icons right">more_vert</i></span>
                <p>2000000 تومان</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">پرنسس<i
                            class="material-icons right">close</i></span>
                <p>ابعاد: 180*100*80</p>
                <p>موجود</p>
                <table class="striped center">
                    <thead>
                    <tr>
                        <th>آیتم</th>
                        <th>شرح</th>
                        <th>قیمت (تومان)</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>تخت</td>
                        <td>1000000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>کمد</td>
                        <td>600000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ویترین</td>
                        <td>400000</td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <div class="col m6">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?= Yii::getAlias('@web') . '/image/package/teenager/8.jpg' ?>">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">پرنسس<i class="material-icons right">more_vert</i></span>
                <p>2000000 تومان</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">پرنسس<i
                            class="material-icons right">close</i></span>
                <p>ابعاد: 180*100*80</p>
                <p>موجود</p>
                <table class="striped center">
                    <thead>
                    <tr>
                        <th>آیتم</th>
                        <th>شرح</th>
                        <th>قیمت (تومان)</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>تخت</td>
                        <td>1000000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>کمد</td>
                        <td>600000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ویترین</td>
                        <td>400000</td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>

</div>
