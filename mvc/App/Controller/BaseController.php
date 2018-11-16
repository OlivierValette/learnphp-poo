<?php
// Controller commun spécifique à l'application

namespace App\Controller;


use Core\Controller\Controller;

abstract class BaseController extends Controller
{
    
    /**
     * Default Controller constructor.
     */
    public function __construct()
    {
        $this->viewPath = __DIR__ . "/../Views/";
        $this->template = "default";
    }
    
}