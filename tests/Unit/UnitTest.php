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


    public function testDelete()
    {
        $user = new  User();
        $user->name = "Shreya";
        $user->email = "Shreya@gmail.com";
        $user->password = 'qwerty';
        $user->save();
        $this->assertTrue($user->delete());
    }

}





