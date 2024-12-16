<?php

namespace app\custom\modules\classifieds\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'message' => 'Welcome to the Classifieds Module!',
        ]);
    }
}
