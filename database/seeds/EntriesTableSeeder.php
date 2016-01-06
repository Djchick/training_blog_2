<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Entry;
use App\User;

class EntriesTableSeeder extends Seeder
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
            $entries = Entry::create([
                'user_id' => User::orderByRaw('RAND()')->first()->id,
                'title' => $faker->word,
                'body' => $faker->text,
            ]);
        }
    }
}
