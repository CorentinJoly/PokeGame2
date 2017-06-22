namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pokemon")
 */
class PokemonDresseur
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idDresseur;

    /**
     * @ORM\Column(type="string" length=250)
     */
    private $nomDress;

    /**
     * @ORM\Column(type="integer")
     */
    private $pieces;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $mailDress;

    /**
     * @ORM\Column(type="string" length=250)
     */
    private $mdpDress;

    /**
     * @ORM\Column(type="string" length=250)
     */
    private $confirmationToken;

    /**
     * @ORM\Column(type="string" length=250)
     */
    private $confirmationDate;
}