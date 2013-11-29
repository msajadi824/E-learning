<?php
namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 */
class GroupLessonEntity
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
     * @ORM\Column(type="string", nullable=true)
     */
    private $explain;

    /** 
     * @ORM\Column(type="string", nullable=false)
     */
    private $university;

    /** 
     * @ORM\OneToMany(targetEntity="LessonEntity", mappedBy="GroupLessonEntity")
     */
    private $LessonEntities;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->LessonEntities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return GroupLessonEntity
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
     * Set explain
     *
     * @param string $explain
     * @return GroupLessonEntity
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
     * Set university
     *
     * @param string $university
     * @return GroupLessonEntity
     */
    public function setUniversity($university)
    {
        $this->university = $university;
    
        return $this;
    }

    /**
     * Get university
     *
     * @return string 
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * Add LessonEntities
     *
     * @param \ELearning\MainBundle\Entity\LessonEntity $lessonEntities
     * @return GroupLessonEntity
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
}