<?php
use aatienza\Curl;

class CurlTest extends PHPUnit_Framework_TestCase
{

    public function testIsCurl()
    {
        $curl = new Curl('http://github.com/aatienza/curl');

        $this->assertInstanceOf('aatienza\Curl', $curl);

        $this->assertInstanceOf('aatienza\Curl', $curl->addData(array('data' => 'allalone')));

        $this->assertInstanceOf(
            'aatienza\Curl',
            $curl->addHeaders(array('header1' => 'php', 'header2' => 'javascript'))
        );

        $this->assertInstanceOf('aatienza\Curl', $curl->addCookies(array('cookie1' => 'ci', 'cookie2' => 'travis')));

        $this->assertArrayHasKey('statusCode', $curl->get());
    }

}