<?php
namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 */
class CommentEntity
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="string", nullable=false)
     */
    private $text;

    /** 
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /** 
     * @ORM\ManyToOne(targetEntity="PostEntity", inversedBy="CommentEntities")
     * @ORM\JoinColumn(name="postid", referencedColumnName="id", nullable=false)
     */
    private $PostEntity;

    /** 
     * @ORM\ManyToOne(targetEntity="UserEntity", inversedBy="CommentEntities")
     * @ORM\JoinColumn(name="userid", referencedColumnName="id", nullable=false)
     */
    private $UserEntity;


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
     * Set text
     *
     * @param string $text
     * @return CommentEntity
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
     * @return CommentEntity
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
     * Set PostEntity
     *
     * @param \ELearning\MainBundle\Entity\PostEntity $postEntity
     * @return CommentEntity
     */
    public function setPostEntity(\ELearning\MainBundle\Entity\PostEntity $postEntity)
    {
        $this->PostEntity = $postEntity;
    
        return $this;
    }

    /**
     * Get PostEntity
     *
     * @return \ELearning\MainBundle\Entity\PostEntity 
     */
    public function getPostEntity()
    {
        return $this->PostEntity;
    }

    /**
     * Set UserEntity
     *
     * @param \ELearning\MainBundle\Entity\UserEntity $userEntity
     * @return CommentEntity
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