<?php

namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity
 */
class PostEntity extends BaseUser
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

}