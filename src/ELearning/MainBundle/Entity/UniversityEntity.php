<?php
namespace ELearning\MainBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity
 */
class UniversityEntity
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
     * @ORM\Column(type="float", nullable=false)
     */
    private $phone;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $website;

    /** 
     * @ORM\Column(type="date", nullable=false)
     */
    private $enddate;

    /** 
     * @ORM\OneToMany(targetEntity="financialEntity", mappedBy="UniversityEntity")
     */
    private $financialEntities;

    /** 
     * @ORM\OneToMany(targetEntity="UserEntity", mappedBy="UniversityEntity")
     */
    private $UserEntities;

}