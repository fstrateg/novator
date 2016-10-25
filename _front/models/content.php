<?php
namespace _front\models;

use Yii;
use yii\db\ActiveRecord;

class content extends ActiveRecord
{
    public static function tableName()
    {
        return "content";
    }
}