<?php

namespace Mm\WhoisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmWhoisBundle:Default:index.html.twig');
    }

    public function checkAction()
    {
        return $this->render('MmWhoisBundle:Default:check.html.twig');
    }
}
