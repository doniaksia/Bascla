<?php

namespace basclaBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class securityControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/add');
    }

    public function testRediract()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rediract');
    }

}
