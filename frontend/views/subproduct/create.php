<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Subproduct */

$this->title = Yii::t('app', 'Create Subproduct');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subproducts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subproduct-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
