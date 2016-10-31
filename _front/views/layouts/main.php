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
    <div class="headpage shadow">
        <a class="logopage" href="/"></a>
    </div>

    <div class="client shadow">
        <?= cmenu::widget();?>
        <article>
            <?= CModules::widget(['content'=>$content]) ?>
        </article>
        <footer class="footer">
        </footer>
    </div>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
