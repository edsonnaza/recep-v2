<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{  use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
 /** @test */
    public function it_visit_page_of_login()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
