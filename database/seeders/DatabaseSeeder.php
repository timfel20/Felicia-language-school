<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
use App\Models\Slide;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin= User::factory([
            'name'=>'admin',
            'email'=>'timmyfelicia@gmail.com',
            'isAdmin'=>true
        ])->create();

        $user = User::factory([
            'email' => 'user@user.com',
            'name' => 'user',
            'isAdmin' => false,
        ])->create();

        Product::factory(8)->create();
        Slide::factory(8)->create();
    }
}
