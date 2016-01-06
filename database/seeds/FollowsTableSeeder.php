<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Follow;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 20) as $index) {
            $follows = Follow::create([
                'user_id' => User::orderByRaw('RAND()')->first()->id,
                'follow_id' => User::orderByRaw('RAND()')->first()->id,
            ]);
        }
    }
}
