<?php

namespace Core\Controller;


abstract class Controller
{
    protected $viewPath; // Views directory path
    protected $template; // default template
    
    protected function render($view, $variables = [])
    {
        ob_start(); // Start buffering the output
        extract($variables); // Convert array to variables
        require($this->viewPath . $view . '.php');
        $content = ob_get_clean(); // Store the output in a variable
        require($this->viewPath . $this->template . '.php');
    }
}