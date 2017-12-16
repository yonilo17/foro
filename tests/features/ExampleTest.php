<?php


class ExampleTest extends FeatureTestCase
{
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            "name" => "Yony Brondy",
            "email" => "yonybrondy17@gmail.com",
        ]);
        $this->actingAs($user,'api')
            ->visit('api/user')
             ->see("Yony Brondy")
              ->see("yonybrondy17@gmail.com");
    }
}
