<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Besucht */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="besucht-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'besucher_ID')->textInput() ?>

    <?= $form->field($model, 'Vorstellung_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
