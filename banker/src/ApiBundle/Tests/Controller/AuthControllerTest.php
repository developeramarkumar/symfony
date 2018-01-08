<?php

namespace ApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'api/auth');
    }

    public function testRegister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'api/register');
    }

}
