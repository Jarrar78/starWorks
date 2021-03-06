<?php

namespace Star\workBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Startup
 *
 * @ORM\Table(name="startup")
 * @ORM\Entity(repositoryClass="Star\workBundle\Repository\StartupRepository")
 */
class Startup
{

    /**
     * @ORM\OneToMany(targetEntity="Star\workBundle\Entity\User",mappedBy="startup")
     */
    private $users;

    /**
     * @ORM\ManyToMany(targetEntity="Star\workBundle\Entity\Category" ,cascade={"persist"},mappedBy="startups")
     */
    private $categories;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Startup
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users=new ArrayCollection();
    }

    /**
     * Add category
     *
     * @param \Star\workBundle\Entity\Category $category
     *
     * @return Startup
     */
    public function addCategory(\Star\workBundle\Entity\Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Star\workBundle\Entity\Category $category
     */
    public function removeCategory(\Star\workBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add user
     *
     * @param \Star\workBundle\Entity\User $user
     *
     * @return Startup
     */
    public function addUser(\Star\workBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Star\workBundle\Entity\User $user
     */
    public function removeUser(\Star\workBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
