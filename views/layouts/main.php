<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Schunterkino Kassensystem',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    
                    Yii::$app->user->isGuest ?
                        ['label' => 'Home', 'url' => ['/site/index'], 'items' => [
                        ['label' => 'Login', 'url' => '/site/login'], 
                            ]]:
                            
                        ['label' => 'Willkommen '. Yii::$app->user->identity->username, 'items' => [
                                
                        ['label' => 'Verwalter', 'url' => ['/site/scan']],
                        ['label' => 'besucht', 'url' => ['/besucht/index']],
                        ['label' => 'Ausweise', 'url' => ['/ausweise/index']],
                        ['label' => 'Vorstellung', 'url' =>['/vorstellung/index']],
                        ['label' => 'Besucher', 'url' => ['/besucher/index']],
                                
                                ['label' => 'Logout', 'url' => '/site/logout'],
                        ]]
                ] ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; SchunterKino e.V. <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
