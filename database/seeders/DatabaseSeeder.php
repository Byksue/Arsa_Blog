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
        
        
        
        User::create([
            'name' => 'Hadi Akbar',
            'username' => 'Byksue',
            'email' => 'harusapaan@gmail.com',
            'password' => bcrypt('password')
        ]);
            
            // User::create([
                //     'name' => 'Agrico Elang',
                //     'email' => 'elang1by1@gmail.com',
                //     'password' => bcrypt('Elang_123')
                // ]);
                
                
                // User::create([
                    //     'name' => 'Asido Rendy',
                    //     'email' => 'asidoganteng@gmail.com',
                    //     'password' => bcrypt('Rendy_123')
                    // ]);
        User::factory(3)->create();
                    
        Category::create([
            'name' => 'Journalist',
            'slug' => 'journalist'
        ]);

        Category::create([
            'name' => 'Broadcaster',
            'slug' => 'broadcaster'
        ]);

        Category::create([
            'name' => 'Music Director',
            'slug' => 'music-director'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Tips Siaran Dijamin 1000% Rame!',
        //     'category_id' => 1,
        //     'user_id' => 3,
        //     'slug' => 'tips-siaran-dijamin-rame',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ut officia ipsam consectetur. Accusamus ducimus temporibus, omnis sint iure facere libero debitis at ipsum eveniet fugiat maiores deserunt provident nam impedit commodi necessitatibus, officia repudiandae error. Laborum est sequi, tempora nesciunt voluptate, dolor quisquam minima tempore repudiandae non odit expedita.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque minima ea excepturi voluptatibus delectus illo omnis magnam autem! Doloribus quibusdam delectus voluptas dicta. Laudantium consequatur aspernatur, dolor quibusdam accusamus aliquam iure exercitationem incidunt commodi vero quis tempore qui obcaecati sit dolorum excepturi nihil numquam! Delectus doloremque nemo mollitia voluptate vel velit iusto fuga, unde amet.</p> <p>Quis quidem tempora eos amet molestiae delectus! Fuga ipsam illo voluptas accusamus maxime recusandae eligendi esse natus ducimus quis consequatur sunt architecto voluptate maiores ea iste facilis commodi, itaque similique voluptatem, magnam veritatis, cupiditate odio? Laudantium, nemo quos consequuntur sed consequatur soluta voluptas ipsa dolorem accusantium, sint ad dolore quod ut odit eos ex beatae impedit facere eveniet voluptatum. Distinctio rem voluptatum reprehenderit cum debitis! </p>'
        // ]);

        // Post::create([
        //     'title' => 'Nama Penyiar Unik, Bisa Bikin Siaran Jadi Rame??',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'nama-penyiar-unik-bisa-bikin-siaran-jadi-rame',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ut officia ipsam consectetur. Accusamus ducimus temporibus, omnis sint iure facere libero debitis at ipsum eveniet fugiat maiores deserunt provident nam impedit commodi necessitatibus, officia repudiandae error. Laborum est sequi, tempora nesciunt voluptate, dolor quisquam minima tempore repudiandae non odit expedita.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque minima ea excepturi voluptatibus delectus illo omnis magnam autem! Doloribus quibusdam delectus voluptas dicta. Laudantium consequatur aspernatur, dolor quibusdam accusamus aliquam iure exercitationem incidunt commodi vero quis tempore qui obcaecati sit dolorum excepturi nihil numquam! Delectus doloremque nemo mollitia voluptate vel velit iusto fuga, unde amet.</p> <p>Quis quidem tempora eos amet molestiae delectus! Fuga ipsam illo voluptas accusamus maxime recusandae eligendi esse natus ducimus quis consequatur sunt architecto voluptate maiores ea iste facilis commodi, itaque similique voluptatem, magnam veritatis, cupiditate odio? Laudantium, nemo quos consequuntur sed consequatur soluta voluptas ipsa dolorem accusantium, sint ad dolore quod ut odit eos ex beatae impedit facere eveniet voluptatum. Distinctio rem voluptatum reprehenderit cum debitis! </p>'
        // ]);

        // Post::create([
        //     'title' => 'Cara Membuat Playlist Siaran yang Bikin Para Pendengar Betah Dengerinnya!',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'slug' => 'cara-membuat-playlist-siaran-yang-bikin-para-pendengar-betah-dengerinnya',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ut officia ipsam consectetur. Accusamus ducimus temporibus, omnis sint iure facere libero debitis at ipsum eveniet fugiat maiores deserunt provident nam impedit commodi necessitatibus, officia repudiandae error. Laborum est sequi, tempora nesciunt voluptate, dolor quisquam minima tempore repudiandae non odit expedita.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque minima ea excepturi voluptatibus delectus illo omnis magnam autem! Doloribus quibusdam delectus voluptas dicta. Laudantium consequatur aspernatur, dolor quibusdam accusamus aliquam iure exercitationem incidunt commodi vero quis tempore qui obcaecati sit dolorum excepturi nihil numquam! Delectus doloremque nemo mollitia voluptate vel velit iusto fuga, unde amet.</p> <p>Quis quidem tempora eos amet molestiae delectus! Fuga ipsam illo voluptas accusamus maxime recusandae eligendi esse natus ducimus quis consequatur sunt architecto voluptate maiores ea iste facilis commodi, itaque similique voluptatem, magnam veritatis, cupiditate odio? Laudantium, nemo quos consequuntur sed consequatur soluta voluptas ipsa dolorem accusantium, sint ad dolore quod ut odit eos ex beatae impedit facere eveniet voluptatum. Distinctio rem voluptatum reprehenderit cum debitis! </p>'
        // ]);

        // Post::create([
        //     'title' => 'Cara Cepat Menjadi Penyiar Handal ala Hadi',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'cara-cepat-menjadi-penyiar-handal-ala-hadi',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ut officia ipsam consectetur. Accusamus ducimus temporibus, omnis sint iure facere libero debitis at ipsum eveniet fugiat maiores deserunt provident nam impedit commodi necessitatibus, officia repudiandae error. Laborum est sequi, tempora nesciunt voluptate, dolor quisquam minima tempore repudiandae non odit expedita.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque minima ea excepturi voluptatibus delectus illo omnis magnam autem! Doloribus quibusdam delectus voluptas dicta. Laudantium consequatur aspernatur, dolor quibusdam accusamus aliquam iure exercitationem incidunt commodi vero quis tempore qui obcaecati sit dolorum excepturi nihil numquam! Delectus doloremque nemo mollitia voluptate vel velit iusto fuga, unde amet.</p> <p>Quis quidem tempora eos amet molestiae delectus! Fuga ipsam illo voluptas accusamus maxime recusandae eligendi esse natus ducimus quis consequatur sunt architecto voluptate maiores ea iste facilis commodi, itaque similique voluptatem, magnam veritatis, cupiditate odio? Laudantium, nemo quos consequuntur sed consequatur soluta voluptas ipsa dolorem accusantium, sint ad dolore quod ut odit eos ex beatae impedit facere eveniet voluptatum. Distinctio rem voluptatum reprehenderit cum debitis! </p>'
        // ]);
    }
}
