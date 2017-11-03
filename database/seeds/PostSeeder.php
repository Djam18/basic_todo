<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
// database/seeders/PostSeeder.php
public function run()
{
    \App\Post::factory(10)->create([
        'user_id' => \App\User::first()->id
    ]);
}
}
