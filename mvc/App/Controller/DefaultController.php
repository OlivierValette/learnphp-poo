<?php

namespace App\Controller;


use Core\Controller\Controller;

class DefaultController extends Controller
{
    
    /**
     * DefaultController constructor.
     */
    public function __construct()
    {
        $this->viewPath = __DIR__ . "/../Views/";
        $this->template = "default";
    }
    
    public function indexAction()
    {
        $user = "pjehan";
        $this->render("default/index", ["username" => $user]);
    }
    
}