<?php
namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 */
class UniversityEntity
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $name;

    /** 
     * @ORM\Column(type="float", nullable=false)
     */
    private $phone;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $website;

    /** 
     * @ORM\Column(type="date", nullable=false)
     */
    private $enddate;

    /** 
     * @ORM\OneToMany(targetEntity="financialEntity", mappedBy="UniversityEntity")
     */
    private $financialEntities;

    /** 
     * @ORM\OneToMany(targetEntity="UserEntity", mappedBy="UniversityEntity")
     */
    private $UserEntities;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->financialEntities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->UserEntities = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set name
     *
     * @param string $name
     * @return UniversityEntity
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
     * Set phone
     *
     * @param float $phone
     * @return UniversityEntity
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
     * Set website
     *
     * @param string $website
     * @return UniversityEntity
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return UniversityEntity
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;
    
        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Add financialEntities
     *
     * @param \ELearning\MainBundle\Entity\financialEntity $financialEntities
     * @return UniversityEntity
     */
    public function addFinancialEntitie(\ELearning\MainBundle\Entity\financialEntity $financialEntities)
    {
        $this->financialEntities[] = $financialEntities;
    
        return $this;
    }

    /**
     * Remove financialEntities
     *
     * @param \ELearning\MainBundle\Entity\financialEntity $financialEntities
     */
    public function removeFinancialEntitie(\ELearning\MainBundle\Entity\financialEntity $financialEntities)
    {
        $this->financialEntities->removeElement($financialEntities);
    }

    /**
     * Get financialEntities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFinancialEntities()
    {
        return $this->financialEntities;
    }

    /**
     * Add UserEntities
     *
     * @param \ELearning\MainBundle\Entity\UserEntity $userEntities
     * @return UniversityEntity
     */
    public function addUserEntitie(\ELearning\MainBundle\Entity\UserEntity $userEntities)
    {
        $this->UserEntities[] = $userEntities;
    
        return $this;
    }

    /**
     * Remove UserEntities
     *
     * @param \ELearning\MainBundle\Entity\UserEntity $userEntities
     */
    public function removeUserEntitie(\ELearning\MainBundle\Entity\UserEntity $userEntities)
    {
        $this->UserEntities->removeElement($userEntities);
    }

    /**
     * Get UserEntities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserEntities()
    {
        return $this->UserEntities;
    }
}