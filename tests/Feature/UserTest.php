<?php

namespace Tests\Feature;

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * ユーザー登録テスト。
     *
     * @return void
     */
    public function testUserRegistration()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
        ]);
    }
}
