<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "Nikita"
        ];
        return $this->render('home',$params);
    }
    public function сontact()
    {

        return $this->render('contact');
    }

    public function handleContanct(Request $request)
    {

        $body = $request->getBody();
        return 'Handling';
    }
}