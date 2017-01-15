<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'Vitor',
            'email' => 'vitor@infinitasoft.com.br',
            'password' => bcrypt('vitor')
        ],
        [
            'name' => 'Marcela',
            'email' => 'marcela@infinitasoft.com.br',
            'password' => bcrypt('marcela')
        ]

        );
    }
}
