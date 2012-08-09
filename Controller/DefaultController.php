<?php

namespace Mm\WhoisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mm\WhoisBundle\Entity\DomainName;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $domainName = new DomainName;
        $form = $this->createFormBuilder($domainName)
            ->add('name', '')
            ->add('identifier', '')
            ->getForm();

        return $this->render('MmWhoisBundle:Default:index.html.twig', array('form' => $form));
    }

    public function checkAction(Request $request)
    {
        return $this->render('MmWhoisBundle:Default:check.html.twig', array('results' => 'OK'));
    }
}
