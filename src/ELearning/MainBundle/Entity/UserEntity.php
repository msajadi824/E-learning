<?php

namespace ELearning\MainBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * UserEntity
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="ELearning\MainBundle\Entity\UserEntityRepository")
 */
class UserEntity extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="fname", type="string", length=50)
     */
    private $fname;

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=50)
     */
    private $lname;

    /**
     * @var float
     *
     * @ORM\Column(name="phone", type="float")
     */
    private $phone;

    /**
     * @var integer
     *
     * @ORM\Column(name="melicode", type="integer")
     */
    private $melicode;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fname
     *
     * @param string $fname
     * @return UserEntity
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    
        return $this;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     * @return UserEntity
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    
        return $this;
    }

    /**
     * Get lname
     *
     * @return string 
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set phone
     *
     * @param float $phone
     * @return UserEntity
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return float 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set melicode
     *
     * @param integer $melicode
     * @return UserEntity
     */
    public function setMelicode($melicode)
    {
        $this->melicode = $melicode;
    
        return $this;
    }

    /**
     * Get melicode
     *
     * @return integer 
     */
    public function getMelicode()
    {
        return $this->melicode;
    }

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

}