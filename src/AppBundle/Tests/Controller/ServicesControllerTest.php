<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ServicesControllerTest extends WebTestCase
{
    public function testServices()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/services');
    }

}
