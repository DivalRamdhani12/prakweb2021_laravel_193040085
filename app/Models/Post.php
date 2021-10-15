<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = 
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dival Ramdhani Fadillah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos minus unde omnis 
            facere necessitatibus eveniet at, non iste tempore aliquam veniam 
            iure nam ducimus odio ea recusandae, inventore rem facilis quidem, maxime corrupti ullam. Vitae natus doloribus vero adipisci sapiente consectetur, enim ipsa! Sed hic fugiat incidunt, tempore itaque, qui earum animi impedit natus, odio est perferendis expedita ab eum dolorem a rerum odit deleniti sunt eligendi? Aut atque beatae aliquid sapiente error, delectus voluptatibus soluta laudantium, adipisci, culpa esse?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doni Santoso",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos minus unde omnis 
            facere necessitatibus eveniet at, non iste tempore aliquam veniam 
            iure nam ducimus odio ea recusandae, inventore rem facilis quidem, maxime corrupti ullam. 
            Vitae natus doloribus vero adipisci sapiente consectetur, enim ipsa! Sed hic fugiat incidunt, 
            tempore itaque, qui earum animi impedit natus, odio est perferendis expedita ab eum dolorem a 
            rerum odit deleniti sunt eligendi? Aut atque beatae aliquid sapiente error, delectus voluptatibus 
             soluta laudantium, adipisci, culpa esse?"
        ],
        ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all(); 
        return $posts->firstwhere('slug', $slug);
    }
}
