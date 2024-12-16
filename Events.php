<?php

namespace app\custom\modules\classifieds;

use humhub\widgets\TopMenu;
use humhub\modules\user\models\User;

class Events
{
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Classifieds',
            'url' => ['/classifieds/index/index'],
            'sortOrder' => 100,
            'isActive' => (\Yii::$app->controller->module && \Yii::$app->controller->module->id == 'classifieds'),
        ]);
    }
}
