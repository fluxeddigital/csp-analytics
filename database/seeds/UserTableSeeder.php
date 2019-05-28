<?php

class UsersTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Jake Feeley',
        'username' => 'fluxeddigital',
        'email'    => 'jake@fluxeddigital.co.uk',
        'password' => Hash::make('Fluxed39!'),
    ));
}

}
