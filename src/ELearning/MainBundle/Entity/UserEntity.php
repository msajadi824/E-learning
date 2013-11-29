<?php
namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

use FOS\UserBundle\Entity\User as BaseUser;

/** 
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class UserEntity extends BaseUser
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** 
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $fname;

    /** 
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $lname;

    /** 
     * @ORM\Column(type="float", nullable=false)
     */
    private $phone;

    /** 
     * @ORM\Column(type="integer", nullable=false)
     */
    private $melicode;

    /** 
     * @ORM\OneToMany(targetEntity="MemoEntity", mappedBy="UserEntity")
     */
    private $MemoEntities;

    /** 
     * @ORM\OneToMany(targetEntity="LessonEntity", mappedBy="UserEntity")
     */
    private $LessonEntities;

    /** 
     * @ORM\OneToMany(targetEntity="PostEntity", mappedBy="UserEntity")
     */
    private $PostEntities;

    /** 
     * @ORM\OneToMany(targetEntity="CommentEntity", mappedBy="UserEntity")
     */
    private $CommentEntities;

    /** 
     * @ORM\ManyToOne(targetEntity="UniversityEntity", inversedBy="UserEntities")
     * @ORM\JoinColumn(name="universityid", referencedColumnName="id", nullable=false)
     */
    private $UniversityEntity;

    /** 
     * @ORM\ManyToOne(targetEntity="StudentLessonEntity", inversedBy="UserEntities")
     * @ORM\JoinColumn(name="stulessonuid", referencedColumnName="id", nullable=false)
     */
    private $StudentLessonEntity;

    public function __construct()
    {
        parent::__construct();
        // your own logic
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

    /**
     * Add MemoEntities
     *
     * @param \ELearning\MainBundle\Entity\MemoEntity $memoEntities
     * @return UserEntity
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
     * Add LessonEntities
     *
     * @param \ELearning\MainBundle\Entity\LessonEntity $lessonEntities
     * @return UserEntity
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
     * Add PostEntities
     *
     * @param \ELearning\MainBundle\Entity\PostEntity $postEntities
     * @return UserEntity
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
     * Add CommentEntities
     *
     * @param \ELearning\MainBundle\Entity\CommentEntity $commentEntities
     * @return UserEntity
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
     * Set UniversityEntity
     *
     * @param \ELearning\MainBundle\Entity\UniversityEntity $universityEntity
     * @return UserEntity
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

    /**
     * Set StudentLessonEntity
     *
     * @param \ELearning\MainBundle\Entity\StudentLessonEntity $studentLessonEntity
     * @return UserEntity
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
}