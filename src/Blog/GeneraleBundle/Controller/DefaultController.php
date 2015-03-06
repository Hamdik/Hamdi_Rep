<?php

namespace Blog\GeneraleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeneraleBundle:Default:index.html.twig');
    }
}
