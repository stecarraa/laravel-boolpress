<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        for($i = 0; $i < 50; $i++) {
            $newPost = new Post();

            $newPost->user_id = $faker->randomElement($users)->id;
            $newPost->title = $faker->sentence(3);
            $newPost->post_content = $faker->text(500);
            $newPost->post_image = $faker->imageUrl(360, 360, 'animals', true);
            $newPost->post_date = $faker->dateTime();
            
            $newPost->save();
        }
    }
}
