<?php
namespace Opine;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class APITest extends TestCase
{
    private $client;

    public function setUp()
    {
        $baseUri = 'http://' . WEB_SERVER_HOST . ':' . WEB_SERVER_PORT;

        $this->client = new Client([
            'base_uri' => $baseUri,
            'timeout'  => 2.0
        ]);
    }

    public function testBuild()
    {
        $this->assertTrue(true);
        var_dump($this->client->request('GET', '/all'));
    }
}
