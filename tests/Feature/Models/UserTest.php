<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_User(): void
    {
        User::factory()->create([
            'email' => 'i@admind.com'
        ]);
        
        $this->assertDatabaseHas('users', [
            'email' => 'i@admind.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'no@existe.com'
        ]);
    }
}
