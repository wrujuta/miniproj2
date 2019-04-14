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

    public function testUpdateCar()
    {
        $cars = car::find(1);
        $cars->year = 2000;
        $this->assertTrue($cars->save());
    }

    public function testCountCar()
    {
        $cars = car::all();
        $carRecordsCount = $cars->count();
        $this->assertEquals(50,$carRecordsCount);
    }

    public function testDeleteCar()
    {
        $cars = new car();
        $cars->user_id = "234";
        $cars->make = 'Honda';
        $cars->model = 'City';
        $cars->year = '2009';
        $cars->save();
        $this->assertTrue($cars->delete());
    }
}





