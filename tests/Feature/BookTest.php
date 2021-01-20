<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class BookTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDisplayAllBook()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/api/book');

        $response->assertStatus(200);
    }
}
