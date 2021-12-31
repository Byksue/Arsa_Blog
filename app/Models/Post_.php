<?php

namespace App\Models;

class Post
{
   private static $blog_posts = [
        [
            "title_blog" => "Tips Siaran Radio Dijamin Rame",
            "slug" => "tips-siaran-radio-dijamin-Rame",
            "author" => "Hadi Akbar",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum impedit sint ex harum, totam quae magnam repudiandae nostrum fuga nihil eos libero perspiciatis quia voluptatem unde, asperiores sed cum eius nam cumque, vel pariatur quod dolorum? Non ab sed laborum et, similique quidem perspiciatis nemo quas neque nobis illo placeat dicta ad debitis commodi dignissimos maiores saepe explicabo officia, cupiditate quod impedit possimus repellat? Earum repellat excepturi delectus consequatur. Exercitationem impedit molestiae ducimus aliquam iste animi suscipit laboriosam! Omnis, ea."
        ],
        [
            "title_blog" => "Cara Mengait Minat Pendengar Agar Selalu Mendengarkan Siaran Kamu!",
            "slug" => "cara-mengait-minat-pendengar-agar-selalu-mendengarkan-siaran-kamu",
            "author" => "Hadi Akbar",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit maxime magnam temporibus consequatur ab, quo incidunt. Optio sit excepturi unde qui laboriosam! Temporibus quas ex maxime? Dolore quis quam ea quod quia itaque, fugiat amet corporis laboriosam praesentium eum. Voluptas, placeat obcaecati. Ex, esse in inventore at odit laboriosam perspiciatis nobis quod atque expedita! Labore esse quis nulla est amet molestiae quidem placeat libero quibusdam excepturi tempora animi inventore, doloremque praesentium, sed aperiam, harum temporibus? A reprehenderit non placeat voluptatem nemo necessitatibus ratione atque ipsa distinctio molestiae inventore, similique animi ut labore quos esse pariatur. At amet quae molestiae fugiat."
        ],
        [
            "title_blog" => "Nama Siaran Menarik Bisa Bikin Jadi Banyak Pendengar?",
            "slug" => "nama-siaran-menarik-bisa-bikin-jadi-banyak-pendengar",
            "author" => "Hadi Akbar",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit maxime magnam temporibus consequatur ab, quo incidunt. Optio sit excepturi unde qui laboriosam! Temporibus quas ex maxime? Dolore quis quam ea quod quia itaque, fugiat amet corporis laboriosam praesentium eum. Voluptas, placeat obcaecati. Ex, esse in inventore at odit laboriosam perspiciatis nobis quod atque expedita! Labore esse quis nulla est amet molestiae quidem placeat libero quibusdam excepturi tempora animi inventore, doloremque praesentium, sed aperiam, harum temporibus? A reprehenderit non placeat voluptatem nemo necessitatibus ratione atque ipsa distinctio molestiae inventore, similique animi ut labore quos esse pariatur. At amet quae molestiae fugiat."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
