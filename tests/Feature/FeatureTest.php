<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class FeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testRegister1()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

    }
    public function testRegister2()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);

    }
}
