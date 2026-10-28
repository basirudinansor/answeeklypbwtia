<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Berita::factory(5)->create();

        // DB::table('users')->insert([
        //     'name' => "Mas Ans",
        //     'email' => 'ans@gmail.com',
        //     'password' => Hash::make('admin12345678++//01#'),
        // ]);


    }
}
