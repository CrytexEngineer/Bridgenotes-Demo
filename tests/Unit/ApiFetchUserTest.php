<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Str;
use Tests\TestCase;


class ApiFetchUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_api_fetch_all_user()
    {

        $this->actingAs($user = User::factory()->create());

        $token = $user->tokens()->create([
            'name' => 'Test Token',
            'token' => Str::random(40),
            'abilities' => ['create', 'read'],
        ]);



        $header=[
            'Authorization' => 'Bearer '.$token,
            'Accept' => 'application/json',
            'Access-Control-Allow-Origin' => '*',
        ];

        $this->withHeaders($header)->get(route('user.index'))->assertStatus(200);
    }

}
