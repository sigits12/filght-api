<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class FlightTest extends TestCase
{
    use DatabaseTransactions;

    public function test_index_should_return_http_status_ok()
    {
       $response = $this->call('GET', '/flights');

       $this->assertEquals(200, $response->status());
    }

    public function test_it_can_store_an_flight()
    {
        $data = [
            'flightNumber' => 'QF400',
            'airline' => 'QF',
            'departurePort' => 'MEL',
            'arrivalPort' => 'SYD',
            'departureTime' => '2020-06-10T09:00:23Z',
            'arrivalTime' => '2020-06-10T09:00:23Z',
            'updated_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $response = $this->call('POST', '/flights', $data);
        $this->assertEquals(201, $response->status());
    }
}
