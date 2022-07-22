<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Heejin",
        "email" => "heejin@gmail.com",
        "image" => "heejin.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Afif",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel laborum voluptas est, commodi pariatur eius, debitis earum officiis quas illo nobis maxime, a sapiente delectus cum placeat sunt fuga minus animi quisquam modi! Omnis, commodi esse. Sint placeat totam odit dolorem magnam ut incidunt nobis, soluta rerum aperiam qui reprehenderit corporis accusantium velit. Fuga, neque cum accusamus deserunt molestiae libero aliquam numquam quisquam ipsum minima architecto facilis praesentium veniam dicta nesciunt quo labore quis ex inventore aspernatur placeat! Omnis, debitis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Afif",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis architecto dolor ducimus. Vitae voluptatum incidunt iusto! Voluptate delectus quidem et porro cumque, ex numquam est eius cum esse obcaecati veniam ullam, perferendis quod, aperiam alias voluptas eveniet placeat! Similique totam cupiditate nostrum ut dolores, nulla cum magnam porro beatae nemo nam officia amet voluptatem rem ipsa tempore illum omnis at eius odio officiis blanditiis. Adipisci maiores eveniet dolores nobis beatae sit ab aliquid quo accusamus, velit sint magnam aperiam sunt recusandae. Aliquam nulla sint dolor distinctio. Adipisci ut repellat at, nobis temporibus unde eius provident autem, aliquid inventore non similique?"
        ]
        
    ];




    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});



//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Afif",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel laborum voluptas est, commodi pariatur eius, debitis earum officiis quas illo nobis maxime, a sapiente delectus cum placeat sunt fuga minus animi quisquam modi! Omnis, commodi esse. Sint placeat totam odit dolorem magnam ut incidunt nobis, soluta rerum aperiam qui reprehenderit corporis accusantium velit. Fuga, neque cum accusamus deserunt molestiae libero aliquam numquam quisquam ipsum minima architecto facilis praesentium veniam dicta nesciunt quo labore quis ex inventore aspernatur placeat! Omnis, debitis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Afif",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis architecto dolor ducimus. Vitae voluptatum incidunt iusto! Voluptate delectus quidem et porro cumque, ex numquam est eius cum esse obcaecati veniam ullam, perferendis quod, aperiam alias voluptas eveniet placeat! Similique totam cupiditate nostrum ut dolores, nulla cum magnam porro beatae nemo nam officia amet voluptatem rem ipsa tempore illum omnis at eius odio officiis blanditiis. Adipisci maiores eveniet dolores nobis beatae sit ab aliquid quo accusamus, velit sint magnam aperiam sunt recusandae. Aliquam nulla sint dolor distinctio. Adipisci ut repellat at, nobis temporibus unde eius provident autem, aliquid inventore non similique?"
        ]
        
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});