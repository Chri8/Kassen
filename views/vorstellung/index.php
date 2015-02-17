<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VorstellungSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vorstellungs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vorstellung-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vorstellung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'film_id',
            'tag',
            'zeit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
