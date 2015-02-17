<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BesuchtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Besuchts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="besucht-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Besucht', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'besucher_ID',
            'Vorstellung_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
