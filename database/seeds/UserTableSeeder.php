<?php

class UserTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->delete();
    
    User::create(array(
        'username' => 'isa9x',
        'password' => Hash::make('sipenyebaran'),
    ));
  }
}