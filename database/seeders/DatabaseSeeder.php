<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => bcrypt('test'),
            'email_verified_at' => '2021-08-08 00:35:32'
        ]);

        \App\Models\User::create([
            'name' => 'Brett',
            'email' => 'badsprad@hotmail.com',
            'password' => bcrypt('test'),
            'email_verified_at' => '2021-08-08 00:35:32'
        ]);
    }
}