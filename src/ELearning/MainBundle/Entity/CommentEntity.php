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

}