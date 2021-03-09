<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;


class ApiCreateUserTest extends TestCase
{    use withFaker;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_api_create_user()
    {


        $this->actingAs($user = User::factory()->create());

        $token = $user->tokens()->create([
            'name' => 'Test Token',
            'token' => Str::random(40),
            'abilities' => ['create', 'read'],
        ]);


        $value = [
                'name' => $this->faker->name,
                'email' => $this->faker->email,
                'password' =>'password',
                'position' => $this->faker->jobTitle,
        ];

        $header=[
            'Authorization' => 'Bearer '.$token,
            'Accept' => 'application/json',
            'Access-Control-Allow-Origin' => '*',
        ];

        $this->withHeaders($header)->post(route('user.index'),$value)->assertStatus(201);
    }
}
