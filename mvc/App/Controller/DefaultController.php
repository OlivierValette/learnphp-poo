<?php

namespace App\Controller;

use App\Entity\Utilisateur;

class DefaultController extends BaseController
{
    
    public function indexAction()
    {
        $users = $this->getDatabase()->getEntity(Utilisateur::class)->getAll();
        $this->render("default/index", ["users" => $users]);
    }
    
}