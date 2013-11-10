<?php

namespace PaulMaxwell\HomeworkBundle\Controller;

use PaulMaxwell\HomeworkBundle\Entity\Developer;
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

    public function partialAuthorInfoAction($showLabel = false)
    {
        $author = new Developer();
        $author->setName('Maxim Polishchuck');
        $author->setContactEmail('mpolishchuck@gmail.com');

        return $this->render('PaulMaxwellHomeworkBundle:Default:_author_info.html.twig', array(
            'author' => $author,
            'showLabel' => $showLabel,
        ));
    }
}
