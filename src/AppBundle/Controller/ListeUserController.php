<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\User;

class ListeUserController extends Controller
{
    public function listeUserAction()
    {
            $em = $this->getDoctrine()->getManager(); 
            $qb = $em->createQueryBuilder();     
            $infosUser = $qb->select('p.Userfirstname, p.Usersecondename, p.Usermail , p.Userlogin , p.Userpassword')
            ->from('AppBundle:User', 'p');
            $infosUser= $qb->getQuery()->getResult();
//            $twig->addExtension(new \Twig_Extension_Debug);
            return $this->render('@App/listeUser/liste-user.html.twig', array('INFOS' => $infosUser,));
    }
}
