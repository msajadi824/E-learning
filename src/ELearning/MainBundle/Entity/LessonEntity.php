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

}