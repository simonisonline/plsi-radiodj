<?php

namespace PlsiRadiodjBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class songsControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/songs');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'songs/show/$id');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'songs/show/$id/edit');
    }

}
