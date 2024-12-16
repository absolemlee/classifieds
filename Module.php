<?php

namespace app\custom\modules\classifieds;

use humhub\modules\content\components\ContentContainerModule;
use humhub\modules\space\models\Space;
use humhub\modules\user\models\User;

class Module extends ContentContainerModule
{
    public $resourcesPath = 'assets';

    public function getContentContainerTypes()
    {
        return [Space::class, User::class];
    }

    public function getDescription()
    {
        return \Yii::t('Classifieds.base', 'A module for creating and browsing classifieds.');
    }

    public function getContentContainerDescription($container)
    {
        if ($container instanceof Space) {
            return \Yii::t('Classifieds.base', 'Adds classifieds to your space.');
        } elseif ($container instanceof User) {
            return \Yii::t('Classifieds.base', 'Adds classifieds to your profile.');
        }
    }
}
