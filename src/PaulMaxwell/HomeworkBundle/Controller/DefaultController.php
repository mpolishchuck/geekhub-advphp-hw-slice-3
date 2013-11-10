<?php

namespace PaulMaxwell\HomeworkBundle\Controller;

use PaulMaxwell\HomeworkBundle\Entity\Developer;
use PaulMaxwell\HomeworkBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PaulMaxwellHomeworkBundle:Default:index.html.twig', array(
            'posts' => $this->getDemoPosts(),
        ));
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

    public function getDemoPosts()
    {
        $posts = array();
        for ($i = 0; $i < 8; $i++) {
            $post = new Post();
            $post->setTitle(uniqid());
            $post->setContent(hash('whirlpool', uniqid()));
            $post->setRating(mt_rand(0, 100000) / 10000);
            $posts[] = $post;
        }

        return $posts;
    }
}
