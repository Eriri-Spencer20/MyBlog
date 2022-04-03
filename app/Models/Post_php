<?php

namespace App\Models;


class Post 
{
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul_post_pertama",
            "penulis" => "Mahardika",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, odit quia fuga soluta neque molestiae enim deleniti consectetur facilis ipsa eligendi minus inventore voluptatem assumenda illum maiores sint consequuntur veritatis quas dignissimos error. Laudantium nemo qui animi sequi dolore accusamus et. Quod praesentium illo ipsa quidem nesciunt debitis atque incidunt, sit dolores iure velit illum eveniet ex voluptas eligendi impedit. Atque eos non consequuntur quam labore optio! Quaerat eaque odio eius error est ea ipsa suscipit earum maxime aut ratione dolor et nam cum rem tenetur iure, vel fuga. Iste."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul_post_kedua",
            "penulis"=> "Slamettt",
            "body" =>"
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus eius error corrupti perferendis nulla nesciunt sunt culpa nihil, odio inventore. Tempore voluptas quam amet, illum veritatis recusandae quasi nesciunt placeat eligendi, voluptatibus, fuga neque dolorem quos! Totam temporibus cumque praesentium aliquid nostrum, non quasi ullam ipsum enim laborum laboriosam, qui tempora. Odio repellat nihil omnis placeat saepe amet porro voluptates harum recusandae! Repudiandae delectus cumque magni quod aperiam aliquid."
        ],
    ];
    
    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
         $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}