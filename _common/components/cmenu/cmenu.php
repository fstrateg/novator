<?php
namespace _common\components\cmenu;
use \yii\base\Widget;
use \_common\models\menu;
use yii\helpers\Url;

class cmenu extends Widget
{
    var $menu_id=0;
    var $showcaption=true;
    public function init()
    {
        parent::init();
        ob_start();
        echo '<div class="menu"><div class="menuleft"></div><div class="menucenter">';
    }

    public function run()
    {
        $menu=menu::findOne(1);
        $items=$menu->getMenuItems();
        echo '<ul class="menu-container">';
        foreach($items as $i)
        {
            $class="menu_item";
            if (Url::current()==$i->url) $class.=" menu_item_active";
            ?>
            <li class="<?=$class?>"><a href="<?= $i->url ?>"><span><?= $i->title ?></span></a></li>
            <?
        }
        echo '</ul></div><div class="menuright"></div></div>';
        $content = ob_get_clean();
        return $content;
    }

}
