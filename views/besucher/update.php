<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Besucher */

$this->title = 'Update Besucher: ' . ' ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Besuchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="besucher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
