<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ausweise */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ausweise-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'besucher_id')->textInput() ?>

    <?= $form->field($model, 'erstellt')->textInput() ?>

    <?= $form->field($model, 'istAktiv')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
