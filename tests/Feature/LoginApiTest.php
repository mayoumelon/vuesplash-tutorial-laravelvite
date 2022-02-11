<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginApiTest extends TestCase
{
    use RefreshDatabase;

    public function setup(): void
    {
        parent::setup();
        $this->user = User::factory()->create();
        $this->withHeaders(['referer' => 'http://localhost', 'origin' => 'http://localhost']);
    }

    public function test_user_login()
    {
        $response =$this->post('api/login', [
                'email' => $this->user->email,
                'password' =>  'password',
            ]);

        $response
            ->assertStatus(200)
            ->assertJson(['name' => $this->user->name]);

        $this->assertAuthenticatedAs($this->user);
    }
}
