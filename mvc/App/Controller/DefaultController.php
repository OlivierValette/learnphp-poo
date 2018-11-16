<?php

namespace App\Controller;

class DefaultController extends BaseController
{
    
    public function indexAction()
    {
        $user = "pjehan";
        $this->render("default/index", ["username" => $user]);
    }
    
}