<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Catagory;
use App\Models\Cettani;
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
       

        User::create ([
            'name' => 'Rafi AL-Faathir K.',
            'username' => 'rafi',
            'email' => 'rafi123@gmail.com',
            'password' => bcrypt('12345678'),
            'confirm' => '12345678',
            'is_admin' => '1'        
        ]);

       

        Cettani::create ([
            'name' => 'Sayur'
        ]);
        
        Cettani::create ([
            'name' => 'Buah'
        ]);


        Catagory::create ([
            'name' => 'Sayur',
            'slug' => 'sayur'
        ]);
        
        Catagory::create ([
            'name' => 'Buah',
            'slug' => 'buah'
        ]);

        Catagory::create ([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Catagory::create ([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Catagory::create ([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);     

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum pertama',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, reiciendis odio. Accusamus amet at in ipsum voluptate, facere hic eum nostrum et sit! Dolores consequatur expedita temporibus aliquam nesciunt ex illum ipsam, aperiam reprehenderit cum ad inventore? Quos corporis ab et cumque iste eligendi minima a accusamus reprehenderit laudantium rerum dolorum repudiandae,</p><p> assumenda veniam, ratione quaerat blanditiis id sequi illo incidunt eum minus voluptatibus. Odio illum architecto libero possimus repudiandae error voluptatem voluptatum quae voluptates, pariatur quos ea omnis laboriosam qui sit cum recusandae? Natus eos nam praesentium nihil dolore cum, aliquam enim ratione placeat perferendis possimus saepe tempore facere?</p>',

        //     'catagory_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum kedua',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, reiciendis odio. Accusamus amet at in ipsum voluptate, facere hic eum nostrum et sit! Dolores consequatur expedita temporibus aliquam nesciunt ex illum ipsam, aperiam reprehenderit cum ad inventore? Quos corporis ab et cumque iste eligendi minima a accusamus reprehenderit laudantium rerum dolorum repudiandae,</p><p> assumenda veniam, ratione quaerat blanditiis id sequi illo incidunt eum minus voluptatibus. Odio illum architecto libero possimus repudiandae error voluptatem voluptatum quae voluptates, pariatur quos ea omnis laboriosam qui sit cum recusandae? Natus eos nam praesentium nihil dolore cum, aliquam enim ratione placeat perferendis possimus saepe tempore facere?</p>',

        //     'catagory_id' => 1,
        //     'user_id' => 2

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-Ketiga',
        //     'excerpt' => 'Lorem, ipsum ketiga',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, reiciendis odio. Accusamus amet at in ipsum voluptate, facere hic eum nostrum et sit! Dolores consequatur expedita temporibus aliquam nesciunt ex illum ipsam, aperiam reprehenderit cum ad inventore? Quos corporis ab et cumque iste eligendi minima a accusamus reprehenderit laudantium rerum dolorum repudiandae,</p><p> assumenda veniam, ratione quaerat blanditiis id sequi illo incidunt eum minus voluptatibus. Odio illum architecto libero possimus repudiandae error voluptatem voluptatum quae voluptates, pariatur quos ea omnis laboriosam qui sit cum recusandae? Natus eos nam praesentium nihil dolore cum, aliquam enim ratione placeat perferendis possimus saepe tempore facere?</p>',

        //     'catagory_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum keempat',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, reiciendis odio. Accusamus amet at in ipsum voluptate, facere hic eum nostrum et sit! Dolores consequatur expedita temporibus aliquam nesciunt ex illum ipsam, aperiam reprehenderit cum ad inventore? Quos corporis ab et cumque iste eligendi minima a accusamus reprehenderit laudantium rerum dolorum repudiandae,</p><p> assumenda veniam, ratione quaerat blanditiis id sequi illo incidunt eum minus voluptatibus. Odio illum architecto libero possimus repudiandae error voluptatem voluptatum quae voluptates, pariatur quos ea omnis laboriosam qui sit cum recusandae? Natus eos nam praesentium nihil dolore cum, aliquam enim ratione placeat perferendis possimus saepe tempore facere?</p>',

        //     'catagory_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
