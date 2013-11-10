<?php

namespace PaulMaxwell\HomeworkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PaulMaxwellHomeworkBundle:Default:index.html.twig');
    }
}
