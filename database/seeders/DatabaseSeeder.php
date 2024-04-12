<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $hobby = Category::create([
            'name' => 'Hobby',
            'slug' => 'hobby'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'slug' => 'my-family-post',
            'title' => 'My Family Post',
            'excerpt' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse eum vel voluptatibus quidem ducimus</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, rerum pariatur? Consequuntur aut illo sunt molestiae repellat deserunt corrupti vero doloremque perferendis soluta quibusdam voluptatem possimus quos voluptatum, nulla reprehenderit fugit aspernatur ad sint reiciendis magni pariatur quisquam laborum tempora. Explicabo commodi accusamus reiciendis quaerat in tenetur harum minus, odit sapiente alias nobis ad reprehenderit, suscipit tempore nam aperiam nulla, voluptas earum nesciunt distinctio ut beatae quis ducimus? Eius tenetur ullam optio hic autem voluptatum magni blanditiis ratione odit. Excepturi delectus quibusdam iure, dignissimos quo odio distinctio, placeat velit possimus tenetur exercitationem dolorem. Hic culpa est aperiam illum atque sed.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobby->id,
            'slug' => 'my-hobby-post',
            'title' => 'My Hobby Post',
            'excerpt' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse eum vel voluptatibus quidem ducimus</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, rerum pariatur? Consequuntur aut illo sunt molestiae repellat deserunt corrupti vero doloremque perferendis soluta quibusdam voluptatem possimus quos voluptatum, nulla reprehenderit fugit aspernatur ad sint reiciendis magni pariatur quisquam laborum tempora. Explicabo commodi accusamus reiciendis quaerat in tenetur harum minus, odit sapiente alias nobis ad reprehenderit, suscipit tempore nam aperiam nulla, voluptas earum nesciunt distinctio ut beatae quis ducimus? Eius tenetur ullam optio hic autem voluptatum magni blanditiis ratione odit. Excepturi delectus quibusdam iure, dignissimos quo odio distinctio, placeat velit possimus tenetur exercitationem dolorem. Hic culpa est aperiam illum atque sed.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'slug' => 'my-work-post',
            'title' => 'My Work Post',
            'excerpt' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse eum vel voluptatibus quidem ducimus</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, rerum pariatur? Consequuntur aut illo sunt molestiae repellat deserunt corrupti vero doloremque perferendis soluta quibusdam voluptatem possimus quos voluptatum, nulla reprehenderit fugit aspernatur ad sint reiciendis magni pariatur quisquam laborum tempora. Explicabo commodi accusamus reiciendis quaerat in tenetur harum minus, odit sapiente alias nobis ad reprehenderit, suscipit tempore nam aperiam nulla, voluptas earum nesciunt distinctio ut beatae quis ducimus? Eius tenetur ullam optio hic autem voluptatum magni blanditiis ratione odit. Excepturi delectus quibusdam iure, dignissimos quo odio distinctio, placeat velit possimus tenetur exercitationem dolorem. Hic culpa est aperiam illum atque sed.</p>'
        ]);
    }
}
