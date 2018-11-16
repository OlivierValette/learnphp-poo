<?php

namespace App\Controller;

class UserController extends BaseController
{
    
    public function profileAction()
    {
        $userid = 57;
        $this->render("user/profile", ["userid" => $userid]);
    }
    
}