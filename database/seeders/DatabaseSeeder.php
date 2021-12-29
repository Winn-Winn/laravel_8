<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, delectus! Dignissimos ipsam nisi ullam consequatur a sint, atque placeat ad molestias error, sit inventore laudantium asperiores ratione excepturi fugiat culpa.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, delectus! Dignissimos ipsam nisi ullam consequatur a sint, atque placeat ad molestias error, sit inventore laudantium asperiores ratione excepturi fugiat culpa.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, delectus! Dignissimos ipsam nisi ullam consequatur a sint, atque placeat ad molestias error, sit inventore laudantium asperiores ratione excepturi fugiat culpa.</p>'
        ]);
    }
}
