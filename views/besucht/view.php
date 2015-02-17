<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Besucht */

$this->title = $model->besucher_ID;
$this->params['breadcrumbs'][] = ['label' => 'Besuchts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="besucht-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'besucher_ID' => $model->besucher_ID, 'Vorstellung_ID' => $model->Vorstellung_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'besucher_ID' => $model->besucher_ID, 'Vorstellung_ID' => $model->Vorstellung_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'besucher_ID',
            'Vorstellung_ID',
        ],
    ]) ?>

</div>
