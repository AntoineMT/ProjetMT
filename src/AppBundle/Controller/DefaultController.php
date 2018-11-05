<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();                
        $query = $em->createQuery('SELECT p.Userfirstname, p.Usersecondename FROM AppBundle:User p');
        $result = $query->getResult();
        var_dump($result);        

        return $this->render('@App/default/index.html.twig', array($result));
    }
}
