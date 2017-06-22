namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="_pokemon")
 */
class Pokemon
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $numeroPokedex;

    /**
     * @ORM\Column(type="boolean")
     */
    private $evolution;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $espece;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $descrition;

    /**
     * @ORM\Column(type="string" length=1)
     */
    private $courbeExp;
}