<?php

namespace ELearning\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ELearningMainBundle:Default:index.html.twig');
    }
}
