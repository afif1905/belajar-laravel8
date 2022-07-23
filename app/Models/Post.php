<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "afif",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel laborum voluptas est, commodi pariatur eius, debitis earum officiis quas illo nobis maxime, a sapiente delectus cum placeat sunt fuga minus animi quisquam modi! Omnis, commodi esse."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "afif",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis architecto dolor ducimus. Vitae voluptatum incidunt iusto! Voluptate delectus quidem et porro cumque, ex numquam est eius cum esse obcaecati veniam ullam,,"
        ]
        
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
