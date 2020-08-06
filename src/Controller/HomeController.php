<?php

namespace App\Controller;

use App\Entity\Skill;
use App\Entity\Contact;
use App\Entity\Project;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/{_locale}", locale="fr", name="home", requirements={"_locale"="fr|en"})
     */
    public function index(Request $req, EntityManagerInterface $em, TranslatorInterface $translator)
    {
        $skills = $this->getDoctrine()->getRepository(Skill:: class)->findAll();

        $projects = $this->getDoctrine()->getRepository(Project:: class)->findAll();
        
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
  
        $form->handleRequest($req);

        if($form->isSubmitted() && $form->isValid()){
            //$em->persist($contact);
            //$em->flush();
            dump($contact);
        }
        
        $locale = $req->getLocale();
        dump($locale);

        return $this->render('home/index.html.twig', [
            'skills' => $skills,
            'projects' => $projects,
            'form' => $form->createView(),
        ]);
    }
    
}
