<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Route_Status_Login()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_Route_Status_Register()
    {
        $response = $this->get('/registrasi');

        $response->assertStatus(200);
    }
    public function test_Route_Status_Home()
    {
        if (Auth::attempt([
            'username' => 'YEHRQ230',
            'password' => 'password'
        ])) {
            # code...
            $response = $this->get('/home');
        }
        $response->assertStatus(200);
    }
}
