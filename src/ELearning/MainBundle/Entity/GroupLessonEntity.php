<?php
namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 */
class GroupLessonEntity extends BaseUser
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

}