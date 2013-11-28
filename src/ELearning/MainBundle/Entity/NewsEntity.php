<?php
namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 */
class NewsEntity
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
    private $subject;

    /** 
     * @ORM\Column(type="string", nullable=false)
     */
    private $text;

    /** 
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

}