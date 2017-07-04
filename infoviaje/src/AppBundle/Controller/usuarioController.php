<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class usuarioController extends Controller
{
    /**
     * @Route("/usuario/registroUsuario")
     */
    public function registroUsuarioAction()
    {
        return $this->render('AppBundle:usuario:registro_usuario.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/usuario/reservarBoleto")
     */
    public function reservarBoletoAction()
    {
        return $this->render('AppBundle:usuario:reservar_boleto.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/usuario/cancelarReserva")
     */
    public function cancelarReservaAction()
    {
        return $this->render('AppBundle:usuario:cancelar_reserva.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/usuario/modificarReserva")
     */
    public function modificarReservaAction()
    {
        return $this->render('AppBundle:usuario:modificar_reserva.html.twig', array(
            // ...
        ));
    }

}
