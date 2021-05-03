<?php

namespace common\models;

use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        // Here you can refer to Application object through $app variable
        $app->params['uploadPath'] = dirname($app->basePath) . '/users/images/';
        $app->params['uploadUrl'] = $app->urlManager->baseUrl . '/users/images/';
    }
}
