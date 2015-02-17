<?php
use yii\helpers\Html;


/* @var $this yii\web\View */
         

$this->title = 'Kassensystem';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index" style="text-align: center">
 <div class="jumbotron">
		<?= Html::img('@web/images/schuntille_text_v3.png', ['style' => 'height:100px;width:350px;']) ?>
        <h1>Willkommen beim Inventursystem</h1>

        <p class="lead">Scanne einen Inventur-Barcode ein.</p>
		
		<?= Html::a('Bestellübersicht', ['drink/summary'], ['class' => 'btn btn-primary']) ?>
    </div>

    <div align="center">

       <?php
			echo Html::beginForm(['drink/consume'],'post',['name' => 'myform']);
	   
			echo Html::textInput('barcode',null,['style' => 'height:180px;font-size: 90px;width:900px;']);
			
			echo Html::endForm();
	   ?>

    </div>
</div>

<!-- a little javascript to have the initial focus on the textfield. -->
<script type="text/javascript" language="JavaScript">
document.forms['myform'].elements['barcode'].focus();
</script>