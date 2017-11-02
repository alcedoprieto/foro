<?php

class ExampleTest extends FeatureTestCase
{

    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
          'name'  =>  'Alcedo Prieto',
          'email' =>  'alcedoprieto@gmail.com',
        ]);

        $this->actingAs($user,'api')
          ->visit('api/user')
          ->see('Alcedo Prieto')
          ->see('alcedoprieto@gmail.com');
    }
}
