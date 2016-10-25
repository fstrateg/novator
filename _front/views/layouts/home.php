<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use _front\assets\AppAsset;
use _common\components\cmenu\cmenu;
use _common\components\CModules\CModules;
use yii\bootstrap\Carousel;

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
<div class="main">
    <div class="header shadow">
            <a class="logo" href="/"></a>
    </div>
    <div class="page shadow">
        <div class="holder">
            <?= cmenu::widget();?>
        </div>
         <?= CModules::widget(['content'=>$content]) ?>
    </div>

    <footer class="footer">
        <div class="holder">
            <p class="pull-left">&copy; НоваТОР <?= date('Y') ?></p>

            <p class="pull-right"></p>
        </div>
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
