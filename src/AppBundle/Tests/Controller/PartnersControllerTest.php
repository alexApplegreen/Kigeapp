<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PartnersControllerTest extends WebTestCase
{
    public function testPartners()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/partners');
    }

}
