<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Besucht */

$this->title = 'Create Besucht';
$this->params['breadcrumbs'][] = ['label' => 'Besuchts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="besucht-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
