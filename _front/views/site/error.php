<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Вышеуказанная ошибка произошла во время обработки Вашего запроса.
    </p>
    <p>
        Пожалуйста, сообщите нам если Вы считаете что это важно. Спасибо.
    </p>

</div>
