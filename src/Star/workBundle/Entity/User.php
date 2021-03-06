<?php

namespace Star\workBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity()
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{

    /**
     * @ORM\ManyToOne(targetEntity="Star\workBundle\Entity\Startup",inversedBy="users")
     */
    private $startup;


    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    private $firstName;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }




    /**
     * Set startup
     *
     * @param \Star\workBundle\Entity\Startup $startup
     *
     * @return User
     */
    public function setStartup(\Star\workBundle\Entity\Startup $startup = null)
    {
        $this->startup = $startup;

        return $this;
    }

    /**
     * Get startup
     *
     * @return \Star\workBundle\Entity\Startup
     */
    public function getStartup()
    {
        return $this->startup;
    }
}
