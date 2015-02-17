<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ausweise */

$this->title = 'Create Ausweise';
$this->params['breadcrumbs'][] = ['label' => 'Ausweises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ausweise-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
