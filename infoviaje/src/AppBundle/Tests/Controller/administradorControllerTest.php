<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class administradorControllerTest extends WebTestCase
{
    public function testRegistroempleados()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/administrador/registroEmpleados');
    }

    public function testRegistrocooperativa()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/administrador/registroCooperativa');
    }

}
