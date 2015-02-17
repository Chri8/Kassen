<?php
use yii\helpers\Html;


/* @var $this yii\web\View */
         

$this->title = 'SchunterKino Kassensystem';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index" style="text-align: center">
 <div class="jumbotron">
		<h1>Kassensystem</h1>

        <p class="lead">Scanne einen Barcode ein.</p>
		
		
    </div>

    <div align="center">

       <?php
			echo Html::beginForm(['ausweise/scan'],'post',['name' => 'myform']);
	   
			echo Html::textInput('barcode',null,['style' => 'height:180px;font-size: 90px;width:900px;']);
			
			echo Html::endForm();
	   ?>

    </div>
</div>

<!-- a little javascript to have the initial focus on the textfield. -->
<script type="text/javascript" language="JavaScript">
document.forms['myform'].elements['barcode'].focus();
</script>