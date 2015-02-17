<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vorstellung */

$this->title = 'Create Vorstellung';
$this->params['breadcrumbs'][] = ['label' => 'Vorstellungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vorstellung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
