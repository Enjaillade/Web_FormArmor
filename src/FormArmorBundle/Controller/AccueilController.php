<?php

namespace FormArmorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormArmorBundle:Accueil:index.html.twig');
    }
}
