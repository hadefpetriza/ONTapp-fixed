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
        \App\Models\User::create([
            "name" => "admin",
            "nip" => "100001",
            "email" => "admin@gmail.com",
            "role" => "1",
            "password" => bcrypt("admin123")
        ]);
    }
}
