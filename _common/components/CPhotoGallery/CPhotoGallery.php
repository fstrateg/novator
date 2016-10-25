<?php
namespace _common\components\CPhotoGallery;

use \yii\base\Widget;
use yii\helpers\Url;

class CPhotoGallery extends Widget
{
    var $params;
    public function run()
    {
        echo '<div class="fotorama" '.$this->params->sliderparams.'>';
        echo $this->getDir();
        echo '</div>';
    }

    private function getDir()
    {
        $base= \Yii::getAlias('@webroot');
		//$base='./../../_front/web/images/slider';

		$base=$base.str_replace("\\",DIRECTORY_SEPARATOR,$this->params->dir);
        $fs=scandir($base);
        $html='';
        foreach($fs as $file)
        {
            $ext=strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (!in_array($ext,['jpg','png','gif'])) continue;
            $file=$this->params->dir."\\".$file;
            $html.="<img src='$file'>";
        }
        return $html;
    }
}