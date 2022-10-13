<?php

namespace Database\Seeders;

use App\Models\Bb;
use App\Models\User;
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
        $users = User::factory(10)->create();
        $bbs = Bb::factory(40)->create();
        $bbs->each(function ($bb) use ($users){
            $bb->user()->associate($users->random())->save();
        });
    }
}
