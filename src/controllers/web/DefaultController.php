<?php

namespace eges7\todo\controllers\web;

use portalium\web\Controller as WebController;

class DefaultController extends WebController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}