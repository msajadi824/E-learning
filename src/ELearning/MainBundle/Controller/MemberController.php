<?php
namespace ELearning\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MemberController extends Controller {

    public function registerAction()
    {
        return $this->render('ELearningMainBundle:Member:register.html.twig');
    }

} 