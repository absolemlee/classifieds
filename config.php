<?php

use humhub\widgets\TopMenu;

return [
    'id' => 'classifieds',
    'class' => 'app\custom\modules\classifieds\Module',
    'namespace' => 'app\custom\modules\classifieds',
    'events' => [
        [
            'class' => TopMenu::class,
            'event' => TopMenu::EVENT_INIT,
            'callback' => ['app\custom\modules\classifieds\Events', 'onTopMenuInit'],
        ],
    ],
];
