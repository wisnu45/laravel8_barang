<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\barang;
use App\Models\user;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        barang::create([
            'nama' => 'black and white',
            'harga' => '50000',
            'stok' => '4',
            'gambar' => 'black and white.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quasi eveniet itaque suscipit quam, quia cum cumque dolorem laborum tempora sit alias laboriosam non molestias aspernatur fugit eius quae, placeat porro. Accusamus officiis veritatis magni fuga, commodi explicabo officia natus tempore aliquam dolore unde saepe consequatur, optio minus repudiandae odio velit nulla cumque aperiam! Aspernatur exercitationem ipsa architecto tempora quas atque dolor neque tempore, nostrum dolorum possimus similique pariatur voluptatum asperiores iusto corrupti, ducimus, impedit consequatur eius tenetur. Ipsa laborum eaque sint ipsam, voluptas ut totam enim culpa praesentium, harum excepturi tempore illum, quaerat repellendus. Quisquam omnis reiciendis illum facere!',
            'slug' => 'black-and-white',
        ]);
        barang::create([
            'nama' => 'feminim sport',
            'harga' => '45000',
            'stok' => '4',
            'gambar' => 'feminim sport.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quasi eveniet itaque suscipit quam, quia cum cumque dolorem laborum tempora sit alias laboriosam non molestias aspernatur fugit eius quae, placeat porro. Accusamus officiis veritatis magni fuga, commodi explicabo officia natus tempore aliquam dolore unde saepe consequatur, optio minus repudiandae odio velit nulla cumque aperiam! Aspernatur exercitationem ipsa architecto tempora quas atque dolor neque tempore, nostrum dolorum possimus similique pariatur voluptatum asperiores iusto corrupti, ducimus, impedit consequatur eius tenetur. Ipsa laborum eaque sint ipsam, voluptas ut totam enim culpa praesentium, harum excepturi tempore illum, quaerat repellendus. Quisquam omnis reiciendis illum facere!',
            'slug' => 'feminim-sport',
        ]);
        barang::create([
            'nama' => 'adidas kw',
            'harga' => '65000',
            'stok' => '4',
            'gambar' => 'adidas kw.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quasi eveniet itaque suscipit quam, quia cum cumque dolorem laborum tempora sit alias laboriosam non molestias aspernatur fugit eius quae, placeat porro. Accusamus officiis veritatis magni fuga, commodi explicabo officia natus tempore aliquam dolore unde saepe consequatur, optio minus repudiandae odio velit nulla cumque aperiam! Aspernatur exercitationem ipsa architecto tempora quas atque dolor neque tempore, nostrum dolorum possimus similique pariatur voluptatum asperiores iusto corrupti, ducimus, impedit consequatur eius tenetur. Ipsa laborum eaque sint ipsam, voluptas ut totam enim culpa praesentium, harum excepturi tempore illum, quaerat repellendus. Quisquam omnis reiciendis illum facere!',
            'slug' => 'adidas-kw',
        ]);
        barang::create([
            'nama' => 'spider adidas',
            'harga' => '75000',
            'stok' => '4',
            'gambar' => 'spider adidas.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quasi eveniet itaque suscipit quam, quia cum cumque dolorem laborum tempora sit alias laboriosam non molestias aspernatur fugit eius quae, placeat porro. Accusamus officiis veritatis magni fuga, commodi explicabo officia natus tempore aliquam dolore unde saepe consequatur, optio minus repudiandae odio velit nulla cumque aperiam! Aspernatur exercitationem ipsa architecto tempora quas atque dolor neque tempore, nostrum dolorum possimus similique pariatur voluptatum asperiores iusto corrupti, ducimus, impedit consequatur eius tenetur. Ipsa laborum eaque sint ipsam, voluptas ut totam enim culpa praesentium, harum excepturi tempore illum, quaerat repellendus. Quisquam omnis reiciendis illum facere!',
            'slug' => 'spider-adidas',
        ]);
        barang::create([
            'nama' => 'daster adidas',
            'harga' => '45000',
            'stok' => '4',
            'gambar' => 'daster adidas.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quasi eveniet itaque suscipit quam, quia cum cumque dolorem laborum tempora sit alias laboriosam non molestias aspernatur fugit eius quae, placeat porro. Accusamus officiis veritatis magni fuga, commodi explicabo officia natus tempore aliquam dolore unde saepe consequatur, optio minus repudiandae odio velit nulla cumque aperiam! Aspernatur exercitationem ipsa architecto tempora quas atque dolor neque tempore, nostrum dolorum possimus similique pariatur voluptatum asperiores iusto corrupti, ducimus, impedit consequatur eius tenetur. Ipsa laborum eaque sint ipsam, voluptas ut totam enim culpa praesentium, harum excepturi tempore illum, quaerat repellendus. Quisquam omnis reiciendis illum facere!',
            'slug' => 'daster-adidas',
        ]);
        barang::create([
            'nama' => 'strip adidas',
            'harga' => '65000',
            'stok' => '4',
            'gambar' => 'strip adidas.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quasi eveniet itaque suscipit quam, quia cum cumque dolorem laborum tempora sit alias laboriosam non molestias aspernatur fugit eius quae, placeat porro. Accusamus officiis veritatis magni fuga, commodi explicabo officia natus tempore aliquam dolore unde saepe consequatur, optio minus repudiandae odio velit nulla cumque aperiam! Aspernatur exercitationem ipsa architecto tempora quas atque dolor neque tempore, nostrum dolorum possimus similique pariatur voluptatum asperiores iusto corrupti, ducimus, impedit consequatur eius tenetur. Ipsa laborum eaque sint ipsam, voluptas ut totam enim culpa praesentium, harum excepturi tempore illum, quaerat repellendus. Quisquam omnis reiciendis illum facere!',
            'slug' => 'strip-adidas',
        ]);
        user::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'level' => 'admin',
        ]);
        user::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('users123'),
            'level' => 'user',
        ]);
    }
}
