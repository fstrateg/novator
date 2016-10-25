<?php

/* @var $this yii\web\View */
use yii\bootstrap\Alert;

$this->title = $article->title;
if (Yii::$app->session->hasFlash('info'))
    echo Alert::widget([
        'options' => [
            'class' => 'alert-info'
        ],
        'body' => Yii::$app->session->getFlash('info')
    ]);
?>

<div class="site-index">
    <?= $article->content ?>

</div>
