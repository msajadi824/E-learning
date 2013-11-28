<?php
namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 */
class financialEntity
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
    private $money;

    /** 
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /** 
     * @ORM\Column(type="date", nullable=false)
     */
    private $adddate;

    /** 
     * @ORM\Column(type="string", nullable=true)
     */
    private $explain;

    /** 
     * @ORM\ManyToOne(targetEntity="UniversityEntity", inversedBy="financialEntities")
     * @ORM\JoinColumn(name="universityid", referencedColumnName="id", nullable=false)
     */
    private $UniversityEntity;

}