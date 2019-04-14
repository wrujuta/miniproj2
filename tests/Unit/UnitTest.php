<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $user = new User();
        $user->name = "Wrujuta Dhavale";
        $user->email = "wpd2@njit.edu";
        $user->password = "123456";

        $this->assertTrue($user->save());
    }
}
