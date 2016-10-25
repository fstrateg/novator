<?php
namespace _common\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class menu extends ActiveRecord
{

    public static function tableName()
    {
        return 'menu';
    }

    public function getMenuItems()
    {
        return menu_items::find()->where(['menu'=>$this->id])->orderBy('order')->all();
    }
}