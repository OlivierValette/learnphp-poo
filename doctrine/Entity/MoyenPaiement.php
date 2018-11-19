<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * MoyenPaiement
 *
 * @ORM\Table(name="moyen_paiement")
 * @ORM\Entity
 */
class MoyenPaiement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;


}
