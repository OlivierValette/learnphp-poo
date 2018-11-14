<?php

namespace Vehicule\Bateau;


class BateauAVoile extends Bateau
{

    /** @var int $nbmats */
    private $nbmats;


    public function demarrer (): void
    {
        echo "Hissez les voiles <br>";
    }

    public function chanter () : void
    {
        echo "C'est fameux $this->nbmats <br>";
    }
}