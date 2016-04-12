<?php

namespace FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testUser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/User');
    }

}
