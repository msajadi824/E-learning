<?php
/**
 * Created by PhpStorm.
 * User: OMID8
 * Date: 11/13/13
 * Time: 6:30 PM
 */

namespace ELearning\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MemberController extends Controller {

    public function registerAction()
    {
        return $this->render('ELearningMainBundle:Member:register.html.twig');
    }

} 