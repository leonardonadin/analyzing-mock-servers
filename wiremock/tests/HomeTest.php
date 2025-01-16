<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use WireMock\Client\WireMock;

class HomeTest extends TestCase
{
    private $wireMock;

    public function setUp(): void
    {
        $this->wireMock = WireMock::create('localhost', 8091);
    }

    public function testHomeWiremock(): void
    {
        $this->assertTrue($this->wireMock->isAlive());

        $this->wireMock->stubFor(
            WireMock::get(WireMock::urlEqualTo('/some/test/url'))
                ->willReturn(
                    WireMock::aResponse()
                        ->withHeader('Content-Type', 'text/plain')
                        ->withBody('Hello world!')
                )
        );

        $actual = file_get_contents("http://localhost:8091/some/test/url");

        $this->wireMock->verify(
            WireMock::getRequestedFor(WireMock::urlEqualTo('/some/test/url'))
        );

        $expected = "Hello world!";

        $this->assertEquals($expected, $actual);
    }

    public function tearDown(): void
    {
        $this->wireMock->resetToDefault();
    }
}
