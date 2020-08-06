<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase{

    public function testIndex(){
        $client = static::createClient();
        $client->request('GET','/');
        
        echo $client->getResponse();
        //static::assertEquals(200,$client->getResponse()->getStatusCode());
    }
}