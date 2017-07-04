<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class cooperativaController extends Controller
{
    /**
     * @Route("/cooperativa/registroBus")
     */
    public function registroBusAction()
    {
        return $this->render('AppBundle:cooperativa:registro_bus.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/cooperativa/registroHorario")
     */
    public function registroHorarioAction()
    {
        return $this->render('AppBundle:cooperativa:registro_horario.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/cooperativa/registroDestino")
     */
    public function registroDestinoAction()
    {
        return $this->render('AppBundle:cooperativa:registro_destino.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/cooperativa/modificarHorario")
     */
    public function modificarHorarioAction()
    {
        return $this->render('AppBundle:cooperativa:modificar_horario.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/cooperativa/modificarDestino")
     */
    public function modificarDestinoAction()
    {
        return $this->render('AppBundle:cooperativa:modificar_destino.html.twig', array(
            // ...
        ));
    }

}
