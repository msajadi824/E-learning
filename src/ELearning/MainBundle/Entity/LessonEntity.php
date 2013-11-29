<?php
namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 */
class LessonEntity
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="string", nullable=true)
     */
    private $explain;

    /** 
     * @ORM\Column(type="string", nullable=false)
     */
    private $password;

    /** 
     * @ORM\OneToMany(targetEntity="PostEntity", mappedBy="LessonEntity")
     */
    private $PostEntities;

    /** 
     * @ORM\ManyToOne(targetEntity="StudentLessonEntity", inversedBy="LessonEntities")
     * @ORM\JoinColumn(name="stulessonlid", referencedColumnName="id", nullable=false)
     */
    private $StudentLessonEntity;

    /** 
     * @ORM\ManyToOne(targetEntity="GroupLessonEntity", inversedBy="LessonEntities")
     * @ORM\JoinColumn(name="groupid", referencedColumnName="id", nullable=false)
     */
    private $GroupLessonEntity;

    /** 
     * @ORM\ManyToOne(targetEntity="UserEntity", inversedBy="LessonEntities")
     * @ORM\JoinColumn(name="teacherid", referencedColumnName="id", nullable=false)
     */
    private $UserEntity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->PostEntities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set explain
     *
     * @param string $explain
     * @return LessonEntity
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
     * Set password
     *
     * @param string $password
     * @return LessonEntity
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Add PostEntities
     *
     * @param \ELearning\MainBundle\Entity\PostEntity $postEntities
     * @return LessonEntity
     */
    public function addPostEntitie(\ELearning\MainBundle\Entity\PostEntity $postEntities)
    {
        $this->PostEntities[] = $postEntities;
    
        return $this;
    }

    /**
     * Remove PostEntities
     *
     * @param \ELearning\MainBundle\Entity\PostEntity $postEntities
     */
    public function removePostEntitie(\ELearning\MainBundle\Entity\PostEntity $postEntities)
    {
        $this->PostEntities->removeElement($postEntities);
    }

    /**
     * Get PostEntities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPostEntities()
    {
        return $this->PostEntities;
    }

    /**
     * Set StudentLessonEntity
     *
     * @param \ELearning\MainBundle\Entity\StudentLessonEntity $studentLessonEntity
     * @return LessonEntity
     */
    public function setStudentLessonEntity(\ELearning\MainBundle\Entity\StudentLessonEntity $studentLessonEntity)
    {
        $this->StudentLessonEntity = $studentLessonEntity;
    
        return $this;
    }

    /**
     * Get StudentLessonEntity
     *
     * @return \ELearning\MainBundle\Entity\StudentLessonEntity 
     */
    public function getStudentLessonEntity()
    {
        return $this->StudentLessonEntity;
    }

    /**
     * Set GroupLessonEntity
     *
     * @param \ELearning\MainBundle\Entity\GroupLessonEntity $groupLessonEntity
     * @return LessonEntity
     */
    public function setGroupLessonEntity(\ELearning\MainBundle\Entity\GroupLessonEntity $groupLessonEntity)
    {
        $this->GroupLessonEntity = $groupLessonEntity;
    
        return $this;
    }

    /**
     * Get GroupLessonEntity
     *
     * @return \ELearning\MainBundle\Entity\GroupLessonEntity 
     */
    public function getGroupLessonEntity()
    {
        return $this->GroupLessonEntity;
    }

    /**
     * Set UserEntity
     *
     * @param \ELearning\MainBundle\Entity\UserEntity $userEntity
     * @return LessonEntity
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
}