<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LogoutApiTest extends TestCase
{
    use RefreshDatabase;

    public function setup(): void
    {
        parent::setup();
        $this->user = User::factory()->create();
        $this->withHeaders(['referer' => 'http://localhost', 'origin' => 'http://localhost']);
    }

    public function test_user_logout()
    {
        $response = $this->actingAs($this->user)
        ->post('api/logout');

        $response->assertStatus(200);
        $this->assertGuest();
    }
}
