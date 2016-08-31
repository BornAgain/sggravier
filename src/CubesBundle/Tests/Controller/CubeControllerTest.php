<?php

namespace CubesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CubeControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Add');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/List');
    }

}
