<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Job;
use App\Models\User;
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
        User::factory()
            ->count(50)
            ->hasProfile(1)
            ->create();

    }
}
