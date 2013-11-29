<?php
namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 */
class financialEntity
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="integer", nullable=false)
     */
    private $money;

    /** 
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /** 
     * @ORM\Column(type="date", nullable=false)
     */
    private $adddate;

    /** 
     * @ORM\Column(type="string", nullable=true)
     */
    private $explain;

    /** 
     * @ORM\ManyToOne(targetEntity="UniversityEntity", inversedBy="financialEntities")
     * @ORM\JoinColumn(name="universityid", referencedColumnName="id", nullable=false)
     */
    private $UniversityEntity;


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
     * Set money
     *
     * @param integer $money
     * @return financialEntity
     */
    public function setMoney($money)
    {
        $this->money = $money;
    
        return $this;
    }

    /**
     * Get money
     *
     * @return integer 
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return financialEntity
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set adddate
     *
     * @param \DateTime $adddate
     * @return financialEntity
     */
    public function setAdddate($adddate)
    {
        $this->adddate = $adddate;
    
        return $this;
    }

    /**
     * Get adddate
     *
     * @return \DateTime 
     */
    public function getAdddate()
    {
        return $this->adddate;
    }

    /**
     * Set explain
     *
     * @param string $explain
     * @return financialEntity
     */
    public function setExplain($explain)
    {
        $this->explain = $explain;
    
        return $this;
    }

    /**
     * Get explain
     *
     * @return string 
     */
    public function getExplain()
    {
        return $this->explain;
    }

    /**
     * Set UniversityEntity
     *
     * @param \ELearning\MainBundle\Entity\UniversityEntity $universityEntity
     * @return financialEntity
     */
    public function setUniversityEntity(\ELearning\MainBundle\Entity\UniversityEntity $universityEntity)
    {
        $this->UniversityEntity = $universityEntity;
    
        return $this;
    }

    /**
     * Get UniversityEntity
     *
     * @return \ELearning\MainBundle\Entity\UniversityEntity 
     */
    public function getUniversityEntity()
    {
        return $this->UniversityEntity;
    }
}