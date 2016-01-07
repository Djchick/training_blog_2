<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Comment;
use App\User;
Use App\Entry;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users = User::all();
        $entries = Entry::all();
        foreach (range(1, 30) as $index) {
            $comments = Comment::create([
                'user_id' => User::orderByRaw('RAND()')->first()->id,
                'entry_id' => Entry::orderByRaw('RAND()')->first()->id,
                'comment' => $faker->text,
            ]);
        }
    }
}
