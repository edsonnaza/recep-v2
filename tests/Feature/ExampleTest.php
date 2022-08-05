<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ExampleTest extends TestCase
{   use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
 /** @test */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
