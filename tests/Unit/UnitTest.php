<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;
class UnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


    public function testInsertCar()
    {
        $cars = new Car();
        $cars->user_id = "123";
        $cars->make = 'Honda';
        $cars->model = 'City';
        $cars->year = '2010';
        $this->assertTrue($cars->save());
    }

}





