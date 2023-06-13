<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Database\Factories\PostFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Adha Noer',
        //     'email' => 'adhanoer@gmail.com',
        //     'password' => bcrypt('1234')

        // ]);

        // User::create([
        //     'name' => 'Hikaru Nara',
        //     'email' => 'narahikaru5@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'


        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'


        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'


        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti possimus vel vero fugit cum fugiat et velit delectus repudiandae facilis odio aut quis magnam magni ab asperiores, numquam commodi nemo autem illo, accusamus reiciendis sunt! Enim nulla ducimus quo et animi iure illum ullam facilis, deleniti, atque qui? Nam, eos!',
        //     'category_id' => 1,
        //     'user_id' => 1


        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti possimus vel vero fugit cum fugiat et velit delectus repudiandae facilis odio aut quis magnam magni ab asperiores, numquam commodi nemo autem illo, accusamus reiciendis sunt! Enim nulla ducimus quo et animi iure illum ullam facilis, deleniti, atque qui? Nam, eos!',
        //     'category_id' => 2,
        //     'user_id' => 1


        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti possimus vel vero fugit cum fugiat et velit delectus repudiandae facilis odio aut quis magnam magni ab asperiores, numquam commodi nemo autem illo, accusamus reiciendis sunt! Enim nulla ducimus quo et animi iure illum ullam facilis, deleniti, atque qui? Nam, eos!',
        //     'category_id' => 2,
        //     'user_id' => 2


        // ]);
    }
}
