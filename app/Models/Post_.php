<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Angga M E",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam molestias neque, numquam sint beatae non nostrum culpa fugit nihil hic nisi quaerat, quisquam aliquid tenetur. Maiores sequi deleniti nam beatae."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Angga M",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam molestias neque, numquam sint beatae non nostrum culpa fugit nihil hic nisi quaerat, quisquam aliquid tenetur. Maiores sequi deleniti nam beatae. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam molestias neque, numquam sint beatae non nostrum culpa fugit nihil hic nisi quaerat, quisquam aliquid tenetur. Maiores sequi deleniti nam beatae."
        ]
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug){
            $posts = static::all();

            return $posts ->firstWhere('slug', $slug) ;
        }
}

