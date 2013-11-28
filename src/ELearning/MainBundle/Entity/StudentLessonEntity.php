<?php

namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class StudentLessonEntity extends BaseUser
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

}