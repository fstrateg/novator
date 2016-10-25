<?php
namespace _common\models;

use yii\db\ActiveRecord;

class menu_items extends ActiveRecord
{
    public static function tableName()
    {
        return 'menu_items';
    }
}