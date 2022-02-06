<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RegisterApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_new_users_can_register()
    {
        $data =  [
            'name' => 'vuesplash user',
            'email' => 'dummy@email.com',
            'password' => 'test1234',
            'password_confirmation' => 'test1234',
        ];

        $response = $this->post('api/register', $data);
        $user = User::first();
        $this->assertEquals($data['name'], $user->name);
        $response
            ->assertStatus(201)
            ->assertJson(['name' => $user->name]);

        // $this->assertAuthenticated();
    }
}
