<?php

namespace FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GelateriaControllerTest extends WebTestCase
{
    public function testRotta()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/gelateria');
    }

}
