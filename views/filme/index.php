<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FilmeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Film Übersicht';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filme-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Filme', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'name',
            'typ',
            'website',
            'kurzbeschreibung',
            'beschreibung:ntext',
            // 'poster',
            // 'trailer',
            // 'erschienen',
            // 'dauer',
            // 'land',
            // 'fsk',
            // 'regisseur',
            // 'schauspieler',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
