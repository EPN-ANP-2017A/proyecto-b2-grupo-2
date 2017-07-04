<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class administradorController extends Controller
{
    /**
     * @Route("/administrador/registroEmpleados")
     */
    public function registroEmpleadosAction()
    {
        return $this->render('AppBundle:administrador:registro_empleados.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/administrador/registroCooperativa")
     */
    public function registroCooperativaAction()
    {
        return $this->render('AppBundle:administrador:registro_cooperativa.html.twig', array(
            // ...
        ));
    }

}
