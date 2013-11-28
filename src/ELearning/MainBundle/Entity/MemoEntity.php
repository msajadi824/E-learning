<?php
namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 */
class MemoEntity extends BaseUser
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
    private $subject;

    /** 
     * @ORM\Column(type="string", nullable=false)
     */
    private $text;

    /** 
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /** 
     * @ORM\OneToMany(targetEntity="MemoEntity", mappedBy="MemoEntity")
     */
    private $MemoEntities;

    /** 
     * @ORM\ManyToOne(targetEntity="UserEntity", inversedBy="MemoEntities")
     * @ORM\JoinColumn(name="fromuser", referencedColumnName="id", nullable=false)
     */
    private $UserEntity;

    /** 
     * @ORM\ManyToOne(targetEntity="MemoEntity", inversedBy="MemoEntities")
     * @ORM\JoinColumn(name="answertomemo", referencedColumnName="id")
     */
    private $MemoEntity;

}