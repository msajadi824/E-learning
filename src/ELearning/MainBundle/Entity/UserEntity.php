<?php
use Doctrine\ORM\Mapping AS ORM;

use FOS\UserBundle\Entity\User as BaseUser;
namespace ELearning\MainBundle\Entity;

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
}