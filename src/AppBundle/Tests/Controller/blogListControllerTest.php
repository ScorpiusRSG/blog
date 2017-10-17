<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class blogListControllerTest extends WebTestCase
{
    public function testBloglist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/blogList');
    }

}
