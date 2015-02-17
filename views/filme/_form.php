<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Filme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="filme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'typ')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'kurzbeschreibung')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'beschreibung')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'poster')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'trailer')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'erschienen')->textInput() ?>

    <?= $form->field($model, 'dauer')->textInput() ?>

    <?= $form->field($model, 'land')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'fsk')->textInput() ?>

    <?= $form->field($model, 'regisseur')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'schauspieler')->textInput(['maxlength' => 256]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
