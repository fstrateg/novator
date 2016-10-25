<?php
namespace _common\components\CModules;

use \yii\base\Widget;
//use _common\components\CPhotoGallery\CPhotoGallery;

class CModules extends Widget
{
    var $content='';

    public function run()
    {



        $db=\Yii::$app->getDb();
        $mod=$db->createCommand("select name,position,params from modules where publish=1")->queryAll();
        foreach($mod as $m)
        {
            $pos=$m['position'];
            $module=$m['name'];
            $text="{module $pos}";
            if (strpos($this->content,$text)>0) {
                $path = "_common\\components\\" . $module . "\\" . $module;
                $view=\Yii::$app->controller->view;
                $assets=\Yii::createObject($path.'Assets', []);
                $assets::register($view);
                $widget = \Yii::createObject($path, []);
                $content = $widget::widget(['params' => json_decode($m['params'])]);
                $this->content=str_replace($text,$content,$this->content);
            }
        }
        return $this->content;

    }
}