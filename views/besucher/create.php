<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Besucher */

$this->title = 'Create Besucher';
$this->params['breadcrumbs'][] = ['label' => 'Besuchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="besucher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
