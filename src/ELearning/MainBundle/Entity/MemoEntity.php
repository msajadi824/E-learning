<?php
namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 */
class MemoEntity
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
    private $subject;

    /** 
     * @ORM\Column(type="string", nullable=false)
     */
    private $text;

    /** 
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /** 
     * @ORM\OneToMany(targetEntity="MemoEntity", mappedBy="MemoEntity")
     */
    private $MemoEntities;

    /** 
     * @ORM\ManyToOne(targetEntity="UserEntity", inversedBy="MemoEntities")
     * @ORM\JoinColumn(name="fromuser", referencedColumnName="id", nullable=false)
     */
    private $UserEntity;

    /** 
     * @ORM\ManyToOne(targetEntity="MemoEntity", inversedBy="MemoEntities")
     * @ORM\JoinColumn(name="answertomemo", referencedColumnName="id")
     */
    private $MemoEntity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->MemoEntities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set subject
     *
     * @param string $subject
     * @return MemoEntity
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return MemoEntity
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return MemoEntity
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
     * Add MemoEntities
     *
     * @param \ELearning\MainBundle\Entity\MemoEntity $memoEntities
     * @return MemoEntity
     */
    public function addMemoEntitie(\ELearning\MainBundle\Entity\MemoEntity $memoEntities)
    {
        $this->MemoEntities[] = $memoEntities;
    
        return $this;
    }

    /**
     * Remove MemoEntities
     *
     * @param \ELearning\MainBundle\Entity\MemoEntity $memoEntities
     */
    public function removeMemoEntitie(\ELearning\MainBundle\Entity\MemoEntity $memoEntities)
    {
        $this->MemoEntities->removeElement($memoEntities);
    }

    /**
     * Get MemoEntities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMemoEntities()
    {
        return $this->MemoEntities;
    }

    /**
     * Set UserEntity
     *
     * @param \ELearning\MainBundle\Entity\UserEntity $userEntity
     * @return MemoEntity
     */
    public function setUserEntity(\ELearning\MainBundle\Entity\UserEntity $userEntity)
    {
        $this->UserEntity = $userEntity;
    
        return $this;
    }

    /**
     * Get UserEntity
     *
     * @return \ELearning\MainBundle\Entity\UserEntity 
     */
    public function getUserEntity()
    {
        return $this->UserEntity;
    }

    /**
     * Set MemoEntity
     *
     * @param \ELearning\MainBundle\Entity\MemoEntity $memoEntity
     * @return MemoEntity
     */
    public function setMemoEntity(\ELearning\MainBundle\Entity\MemoEntity $memoEntity = null)
    {
        $this->MemoEntity = $memoEntity;
    
        return $this;
    }

    /**
     * Get MemoEntity
     *
     * @return \ELearning\MainBundle\Entity\MemoEntity 
     */
    public function getMemoEntity()
    {
        return $this->MemoEntity;
    }
}