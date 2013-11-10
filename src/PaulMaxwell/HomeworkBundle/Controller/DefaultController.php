<?php

namespace PaulMaxwell\HomeworkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PaulMaxwellHomeworkBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('PaulMaxwellHomeworkBundle:Default:about.html.twig');
    }

    public function contactAction()
    {
        return $this->render('PaulMaxwellHomeworkBundle:Default:contact.html.twig');
    }
}
