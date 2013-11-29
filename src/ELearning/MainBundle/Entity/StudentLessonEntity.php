<?php

namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class StudentLessonEntity
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
    private $stuid;

    /** 
     * @ORM\Column(type="integer", nullable=false)
     */
    private $lessonid;

    /** 
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $accept;

    /** 
     * @ORM\OneToMany(targetEntity="LessonEntity", mappedBy="StudentLessonEntity")
     */
    private $LessonEntities;

    /** 
     * @ORM\OneToMany(targetEntity="UserEntity", mappedBy="StudentLessonEntity")
     */
    private $UserEntities;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->LessonEntities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set stuid
     *
     * @param integer $stuid
     * @return StudentLessonEntity
     */
    public function setStuid($stuid)
    {
        $this->stuid = $stuid;
    
        return $this;
    }

    /**
     * Get stuid
     *
     * @return integer 
     */
    public function getStuid()
    {
        return $this->stuid;
    }

    /**
     * Set lessonid
     *
     * @param integer $lessonid
     * @return StudentLessonEntity
     */
    public function setLessonid($lessonid)
    {
        $this->lessonid = $lessonid;
    
        return $this;
    }

    /**
     * Get lessonid
     *
     * @return integer 
     */
    public function getLessonid()
    {
        return $this->lessonid;
    }

    /**
     * Set accept
     *
     * @param boolean $accept
     * @return StudentLessonEntity
     */
    public function setAccept($accept)
    {
        $this->accept = $accept;
    
        return $this;
    }

    /**
     * Get accept
     *
     * @return boolean 
     */
    public function getAccept()
    {
        return $this->accept;
    }

    /**
     * Add LessonEntities
     *
     * @param \ELearning\MainBundle\Entity\LessonEntity $lessonEntities
     * @return StudentLessonEntity
     */
    public function addLessonEntitie(\ELearning\MainBundle\Entity\LessonEntity $lessonEntities)
    {
        $this->LessonEntities[] = $lessonEntities;
    
        return $this;
    }

    /**
     * Remove LessonEntities
     *
     * @param \ELearning\MainBundle\Entity\LessonEntity $lessonEntities
     */
    public function removeLessonEntitie(\ELearning\MainBundle\Entity\LessonEntity $lessonEntities)
    {
        $this->LessonEntities->removeElement($lessonEntities);
    }

    /**
     * Get LessonEntities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLessonEntities()
    {
        return $this->LessonEntities;
    }

    /**
     * Add UserEntities
     *
     * @param \ELearning\MainBundle\Entity\UserEntity $userEntities
     * @return StudentLessonEntity
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