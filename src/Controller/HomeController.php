<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{

    /**
     *
     * @Route("/test")
     */
    public function index(EntityManagerInterface $em)
    {

       /*$c =  new \App\Entity\Contract;
       $c->setName('Floripro');
       $em->persist($c);
       $em->flush();*/

       $contacts = $em->getRepository('App:Contract')->findAll();

       //dump($em->getConnection()); die();
       return $this->render('home/index.html.twig', ['contracts' => $contacts]);
    }

}
