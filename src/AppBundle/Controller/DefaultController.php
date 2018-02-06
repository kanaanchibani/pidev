<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');

    }

    public function testAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/parenttest.html.twig');

    }


    public function clubAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('version0/club.html.twig');

    }


    public function eventsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('version0/events.html.twig');

    }

    public function spottedAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('version0/spotted.html.twig');

    }

    public function docsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('version0/docs.html.twig');

    }

}
