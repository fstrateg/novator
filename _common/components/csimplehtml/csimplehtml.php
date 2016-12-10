<?php
namespace _common\components\csimplehtml;
use \yii\base\Widget;

class csimplehtml extends Widget
{
    var $position;
    public function run()
    {
        $html='';
        $db=\Yii::$app->getDb();

        $rez=$db->createCommand("Select params from modules where name='csimplehtml' and publish=1 and position=:pos",[':pos'=>$this->position])
            ->queryAll();
        foreach($rez as $h)
        {
            $html.=$h['params'];
        }
        return $html;
    }
}