<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class usuarioControllerTest extends WebTestCase
{
    public function testRegistrousuario()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/usuario/registroUsuario');
    }

    public function testReservarboleto()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/usuario/reservarBoleto');
    }

    public function testCancelarreserva()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/usuario/cancelarReserva');
    }

    public function testModificarreserva()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/usuario/modificarReserva');
    }

}
