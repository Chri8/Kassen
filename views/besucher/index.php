<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BesucherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Besucher';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="besucher-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Besucher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'ersterBesuch',
            'letzterBesuch',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
