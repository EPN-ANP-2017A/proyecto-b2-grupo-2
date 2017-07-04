<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class cooperativaControllerTest extends WebTestCase
{
    public function testRegistrobus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cooperativa/registroBus');
    }

    public function testRegistrohorario()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cooperativa/registroHorario');
    }

    public function testRegistrodestino()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cooperativa/registroDestino');
    }

    public function testModificarhorario()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cooperativa/modificarHorario');
    }

    public function testModificardestino()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cooperativa/modificarDestino');
    }

}
