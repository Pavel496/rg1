<?php

use App\Post;

use App\Category;

use App\Tag;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\Storage;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->deleteDirectory('posts');
        Post::truncate();
        Category::truncate();

        $post = new Category;
        $post->name = "Вакансии";
        $post->save();

        $post = new Category;
        $post->name = "Резюме";
        $post->save();

        $post = new Post;
        $post->title = "Мой пост №1";
        $post->url = str_slug("Мой пост №1");
        $post->salary = "salary №1";
        $post->address = "address №1";
        $post->photo = "photo №1";
        $post->phone = "phone №1";
        $post->email = "email №1";
        $post->excerpt = "Краткое описание поста №1";
        $post->body = "<p>Полное описание поста №1</p>";
        $post->published_at = Carbon::now()->subDays(5);
        $post->category_id = 1;
        $post->user_id = 1;
        $post->days = 5;
        $post->save();
        // $post->tags()->attach(Tag::create(['name'=>'N1']));

        $post = new Post;
        $post->title = "Мой пост №2";
        $post->url = str_slug("Мой пост №2");
        $post->salary = "salary №2";
        $post->address = "address №2";
        $post->photo = "photo №2";
        $post->phone = "phone №2";
        $post->email = "email №2";
        $post->excerpt = "Краткое описание поста №2";
        $post->body = "<p>Полное описание поста №2</p>";
        $post->published_at = Carbon::now()->subDays(4);
        $post->category_id = 2;
        $post->user_id = 1;
        $post->days = 5;
        $post->save();
        // $post->tags()->attach(Tag::create(['name'=>'N2']));

        $post = new Post;
        $post->title = "Мой пост №3";
        $post->url = str_slug("Мой пост №3");
        $post->salary = "salary №3";
        $post->address = "address №3";
        $post->photo = "photo №3";
        $post->phone = "phone №3";
        $post->email = "email №3";
        $post->excerpt = "Краткое описание поста №3";
        $post->body = "<p>Полное описание поста №3</p>";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 1;
        $post->user_id = 1;
        $post->days = 5;
        $post->save();
        // $post->tags()->attach(Tag::create(['name'=>'N3']));

        $post = new Post;
        $post->title = "Мой пост №4";
        $post->url = str_slug("Мой пост №4");
        $post->salary = "salary №4";
        $post->address = "address №4";
        $post->photo = "photo №4";
        $post->phone = "phone №4";
        $post->email = "email №4";
        $post->excerpt = "Краткое описание поста №4";
        $post->body = "<p>Полное описание поста №4</p>";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id = 2;
        $post->user_id = 1;
        $post->days = 5;
        $post->save();
        // $post->tags()->attach(Tag::create(['name'=>'N4']));

        $post = new Post;
        $post->title = "Мой пост №5";
        $post->url = str_slug("Мой пост №5");
        $post->salary = "salary №5";
        $post->address = "address №5";
        $post->photo = "photo №5";
        $post->phone = "phone №5";
        $post->email = "email №5";
        $post->excerpt = "Краткое описание поста №5";
        $post->body = "<p>Полное описание поста №5</p>";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 1;
        $post->user_id = 1;
        $post->days = 5;
        $post->save();
        // $post->tags()->attach(Tag::create(['name'=>'N5']));


    }
}
