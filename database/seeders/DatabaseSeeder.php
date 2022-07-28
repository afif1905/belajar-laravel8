<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Afif',
        //     'email' => 'afif@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Heejin',
        //     'email' => 'heejin@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, sunt rem mollitia est saepe officiis animi, aut voluptatibus quas voluptas dolores earum corrupti doloremque qui non enim aspernatur aliquid ullam beatae. Fugiat, facilis voluptatum qui optio iure, ducimus, quibusdam temporibus ipsam error dolores beatae? Hic, eum magnam numquam veniam natus distinctio tenetur perferendis, aliquam, placeat quam odit iusto reiciendis doloremque nam vel. At cum repellendus cupiditate aliquid nostrum fuga consectetur quam. Aliquid qui recusandae amet tenetur, enim nam. Eum perferendis omnis ullam ea? Possimus a eum atque voluptas architecto, minima tempora ut dolore et, dolores dignissimos dolor totam soluta repellat?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, sunt rem mollitia est saepe officiis animi, aut voluptatibus quas voluptas dolores earum corrupti doloremque qui non enim aspernatur aliquid ullam beatae. Fugiat, facilis voluptatum qui optio iure, ducimus, quibusdam temporibus ipsam error dolores beatae? Hic, eum magnam numquam veniam natus distinctio tenetur perferendis, aliquam, placeat quam odit iusto reiciendis doloremque nam vel. At cum repellendus cupiditate aliquid nostrum fuga consectetur quam. Aliquid qui recusandae amet tenetur, enim nam. Eum perferendis omnis ullam ea? Possimus a eum atque voluptas architecto, minima tempora ut dolore et, dolores dignissimos dolor totam soluta repellat?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, sunt rem mollitia est saepe officiis animi, aut voluptatibus quas voluptas dolores earum corrupti doloremque qui non enim aspernatur aliquid ullam beatae. Fugiat, facilis voluptatum qui optio iure, ducimus, quibusdam temporibus ipsam error dolores beatae? Hic, eum magnam numquam veniam natus distinctio tenetur perferendis, aliquam, placeat quam odit iusto reiciendis doloremque nam vel. At cum repellendus cupiditate aliquid nostrum fuga consectetur quam. Aliquid qui recusandae amet tenetur, enim nam. Eum perferendis omnis ullam ea? Possimus a eum atque voluptas architecto, minima tempora ut dolore et, dolores dignissimos dolor totam soluta repellat?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, sunt rem mollitia est saepe officiis animi, aut voluptatibus quas voluptas dolores earum corrupti doloremque qui non enim aspernatur aliquid ullam beatae. Fugiat, facilis voluptatum qui optio iure, ducimus, quibusdam temporibus ipsam error dolores beatae? Hic, eum magnam numquam veniam natus distinctio tenetur perferendis, aliquam, placeat quam odit iusto reiciendis doloremque nam vel. At cum repellendus cupiditate aliquid nostrum fuga consectetur quam. Aliquid qui recusandae amet tenetur, enim nam. Eum perferendis omnis ullam ea? Possimus a eum atque voluptas architecto, minima tempora ut dolore et, dolores dignissimos dolor totam soluta repellat?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
