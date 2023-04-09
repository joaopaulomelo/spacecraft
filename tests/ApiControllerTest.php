<?php

use PHPUnit\Framework\TestCase;

class ApiControllerTest extends TestCase
{
    /**
     * @test
     *
     */
    public function testList()
    {
        $trackingResponse = json_decode($this->mockSpaceships());
        $result = json_decode(file_get_contents('http://localhost:3000/spaceships'));
        $this->assertEquals($result, $trackingResponse);
    }

    /**
     * @return array
     */
    private function mockSpaceships()
    {
        return file_get_contents('tests/mocks/spaceships.json');
    }
}
