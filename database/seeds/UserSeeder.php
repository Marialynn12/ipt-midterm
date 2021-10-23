<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
                'id' => 1,
                'lname' => 'Malbas',
                'fname' => 'Maria lynn',
                'address' => 'Bohol',
                'phone' => '09245125',
                'email' => 'Maria lynn@email.com',
                'password' => bcrypt('Maria lynn')
            ],
            [
                'id' => 2,
                'lname' => 'Tiktokerist',
                'fname' => 'Maria lynn',
                'address' => 'Cadana',
                'phone' => '02144124',
                'email' => 'Maria lynn@email.com',
                'password' => bcrypt('Maria lynn')
            ],
            [
                'id' => 3,
                'lname' => 'Maria lynn',
                'fname' => 'Maria lynn',
                'address' => 'USA',
                'phone' => '12515',
                'email' => 'Maria lynn@email.com',
                'password' => bcrypt('Maria lynn')
            ],
        ];
        foreach ($user_list as $user) {
            \App\User::create($user);

        }
    }
}
