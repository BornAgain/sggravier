<?php

namespace AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EntitiesControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/add');
    }

    public function testUpdate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/update');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/list');
    }

    public function testSee()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/see');
    }

}
