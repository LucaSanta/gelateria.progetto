<?php

namespace BackBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReportisticaControllerTest extends WebTestCase
{
    public function testTabella()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tabella');
    }

}
