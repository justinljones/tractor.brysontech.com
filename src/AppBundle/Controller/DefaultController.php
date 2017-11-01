<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/FAQ", name="FAQ")
     */
    public function faqAction(Request $request)
    {
        return $this->render('FAQ/faq.html.twig');
    }
    
    /**
     * @Route("/Testimonials", name="Testimonials")
     */
    public function testimonialAction(Request $request)
    {
        return $this->render('Testimonials/testimonial.html.twig');
    }
}
