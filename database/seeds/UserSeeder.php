<?php

use App\Post;
use App\User;
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
        factory(User::class, 10)
            ->create()
            ->each(function ($user) {
                $user->posts()->save(factory(Post::class)->make());
                $user->posts()->save(factory(Post::class)->make());
                $user->posts()->save(factory(Post::class)->make());
            });
    }
}
