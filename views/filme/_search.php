<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FilmeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="filme-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'typ') ?>

    <?= $form->field($model, 'website') ?>

    <?= $form->field($model, 'kurzbeschreibung') ?>

    <?php // echo $form->field($model, 'beschreibung') ?>

    <?php // echo $form->field($model, 'poster') ?>

    <?php // echo $form->field($model, 'trailer') ?>

    <?php // echo $form->field($model, 'erschienen') ?>

    <?php // echo $form->field($model, 'dauer') ?>

    <?php // echo $form->field($model, 'land') ?>

    <?php // echo $form->field($model, 'fsk') ?>

    <?php // echo $form->field($model, 'regisseur') ?>

    <?php // echo $form->field($model, 'schauspieler') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
