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


    public function testUpdate()
    {
        $user = User::find(1);
        $user->save();
        $this->assertTrue($user->delete());
    }

    public function testCount()
    {
        $user = User::all();
        $recordsCount = $user->count();
        $this->assertEquals(50, $recordsCount);
    }

    public function testInsertUser()
    {
        $user = new User();
        $user->name = "Leena Patil";
        $user->email = "lp277@njit.com";
        $user->password = "123456";
        $this->assertTrue($user->save());
    }

}





