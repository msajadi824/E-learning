<?php

namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity
 */
class PostEntity
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
    private $subject;

    /** 
     * @ORM\Column(type="string", nullable=true)
     */
    private $text;

    /** 
     * @ORM\Column(nullable=true)
     */
    private $file;

    /** 
     * @ORM\Column(nullable=false)
     */
    private $type;

    /** 
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $public;

    /** 
     * @ORM\Column(nullable=true)
     */
    private $touser;

    /** 
     * @ORM\OneToMany(targetEntity="CommentEntity", mappedBy="PostEntity")
     */
    private $CommentEntities;

    /** 
     * @ORM\ManyToOne(targetEntity="UserEntity", inversedBy="PostEntities")
     * @ORM\JoinColumn(name="userid", referencedColumnName="id", nullable=false)
     */
    private $UserEntity;

    /** 
     * @ORM\ManyToOne(targetEntity="LessonEntity", inversedBy="PostEntities")
     * @ORM\JoinColumn(name="lessonid", referencedColumnName="id", nullable=false)
     */
    private $LessonEntity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->CommentEntities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return PostEntity
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
     * @return PostEntity
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
     * Set file
     *
     * @param string $file
     * @return PostEntity
     */
    public function setFile($file)
    {
        $this->file = $file;
    
        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return PostEntity
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return PostEntity
     */
    public function setPublic($public)
    {
        $this->public = $public;
    
        return $this;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set touser
     *
     * @param string $touser
     * @return PostEntity
     */
    public function setTouser($touser)
    {
        $this->touser = $touser;
    
        return $this;
    }

    /**
     * Get touser
     *
     * @return string 
     */
    public function getTouser()
    {
        return $this->touser;
    }

    /**
     * Add CommentEntities
     *
     * @param \ELearning\MainBundle\Entity\CommentEntity $commentEntities
     * @return PostEntity
     */
    public function addCommentEntitie(\ELearning\MainBundle\Entity\CommentEntity $commentEntities)
    {
        $this->CommentEntities[] = $commentEntities;
    
        return $this;
    }

    /**
     * Remove CommentEntities
     *
     * @param \ELearning\MainBundle\Entity\CommentEntity $commentEntities
     */
    public function removeCommentEntitie(\ELearning\MainBundle\Entity\CommentEntity $commentEntities)
    {
        $this->CommentEntities->removeElement($commentEntities);
    }

    /**
     * Get CommentEntities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentEntities()
    {
        return $this->CommentEntities;
    }

    /**
     * Set UserEntity
     *
     * @param \ELearning\MainBundle\Entity\UserEntity $userEntity
     * @return PostEntity
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
     * Set LessonEntity
     *
     * @param \ELearning\MainBundle\Entity\LessonEntity $lessonEntity
     * @return PostEntity
     */
    public function setLessonEntity(\ELearning\MainBundle\Entity\LessonEntity $lessonEntity)
    {
        $this->LessonEntity = $lessonEntity;
    
        return $this;
    }

    /**
     * Get LessonEntity
     *
     * @return \ELearning\MainBundle\Entity\LessonEntity 
     */
    public function getLessonEntity()
    {
        return $this->LessonEntity;
    }
}