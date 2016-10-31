<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use _front\assets\AppAsset;
use _common\components\cmenu\cmenu;
use _common\components\CModules\CModules;
use _common\components\cPhotoGallery\CPhotoGallery;
use _common\components\cPhotoGallery\CPhotoGalleryAssets;

AppAsset::register($this);
CPhotoGalleryAssets::register($this);
$params=new stdClass();
$params->dir='/images/slider/';
$params->sliderparams="data-autoplay='true'  data-width='535' data-height='300' data-ratio='564/200' data-arrows='false' nav='false'";
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
            <div id="telik">
                <div class="ekran">
                    <?= CPhotoGallery::widget(['params'=>$params]); ?>
                </div>
            </div>
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
