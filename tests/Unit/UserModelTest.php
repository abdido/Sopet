<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase; 

class UserModelTest extends TestCase
{
    use DatabaseMigrations;

    /**
    * A basic test.
    * @test
    * @return void
    */
    public function user_input_valid()
    {
        $user = User::create(['name' => 'Sopet', 'email' => 'me@abc.com', 'password' => 'password']);

        $this->assertEquals('Sopet', $user->name);
        $this->assertEquals('me@abc.com', $user->email);
        $this->assertEquals('password', $user->password);
    }
}