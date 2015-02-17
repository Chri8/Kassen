<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Besucht */

$this->title = 'Update Besucht: ' . ' ' . $model->besucher_ID;
$this->params['breadcrumbs'][] = ['label' => 'Besuchts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->besucher_ID, 'url' => ['view', 'besucher_ID' => $model->besucher_ID, 'Vorstellung_ID' => $model->Vorstellung_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="besucht-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
