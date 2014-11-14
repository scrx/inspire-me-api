<?php




class UserTableSeeder extends Seeder
{


    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'username' => 'zoltax',
            'password' => Hash::make('pass'),
            'email' => 'filipkulig@gmail.com',
            'firstname' => 'Filip',
            'lastname' => 'K',
        ));

        User::create(array(
            'username' => 'scx',
            'password' => Hash::make('pass'),
            'email' => 'matt.piskorz@gmail.com',
            'firstname' => 'Mateusz',
            'lastname' => 'P.',
        ));

    }

}