<?php

namespace PlsiRadiodjBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlaylistbuilderControllerTest extends WebTestCase
{
    public function testIndax()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'index');
    }

}
