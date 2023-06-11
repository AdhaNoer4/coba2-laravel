<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adha Noer H",
            "body" => "  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic quod cum rerum provident mollitia eveniet delectus? Repellat eum id doloribus amet nam expedita architecto optio laborum quia dicta minima labore obcaecati rerum, natus deserunt deleniti praesentium! Expedita assumenda tenetur, illo sequi repellat atque a laudantium accusamus dolorem. Corporis sint eveniet sit consectetur, consequuntur ullam, ipsam eligendi perferendis, error aliquid excepturi porro atque est aperiam. Vel quisquam debitis dolorem doloremque deserunt unde nam harum nulla vitae. Recusandae doloribus culpa amet! Porro inventore temporibus at. Quod neque, magnam ut eum beatae aliquid non voluptate ex excepturi, dolor labore odit, earum provident amet."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mochy Fami",
            "body" => "  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic quod cum rerum provident mollitia eveniet delectus? Repellat eum id doloribus amet nam expedita architecto optio laborum quia dicta minima labore obcaecati rerum, natus deserunt deleniti praesentium! Expedita assumenda tenetur, illo sequi repellat atque a laudantium accusamus dolorem. Corporis sint eveniet sit consectetur, consequuntur ullam, ipsam eligendi perferendis, error aliquid excepturi porro atque est aperiam. Vel quisquam debitis dolorem doloremque deserunt unde nam harum nulla vitae. Recusandae doloribus culpa amet! Porro inventore temporibus at. Quod neque, magnam ut eum beatae aliquid non voluptate ex excepturi, dolor labore odit, earum provident amet."
        ]
    ];

    public static function all()
    {
        // collection laravel
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];

        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug); // contoh function collection
    }
}
