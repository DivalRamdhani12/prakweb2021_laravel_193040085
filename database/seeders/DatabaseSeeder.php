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
        // User::create([
        //     'name' => 'Dival Ramdhani',
        //     'email' => 'divarmd12@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
       
        // User::create([
        //     'name' => 'Doni Santoso',
        //     'email' => 'doni77@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(4)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum minima suscipit doloremque d
        //     ucimus nostrum itaque nam nihil maxime inventore illo. Blanditiis cumque beatae nostrum ut a quam in, 
        //     consectetur vero necessitatibus quas. Unde sequi animi,',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
 
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum minima suscipit doloremque d
        //     ucimus nostrum itaque nam nihil maxime inventore illo. Blanditiis cumque beatae nostrum ut a quam in, 
        //     consectetur vero necessitatibus quas. Unde sequi animi,',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum minima suscipit doloremque d
        //     ucimus nostrum itaque nam nihil maxime inventore illo. Blanditiis cumque beatae nostrum ut a quam in, 
        //     consectetur vero necessitatibus quas. Unde sequi animi,',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum minima suscipit doloremque d
        //     ucimus nostrum itaque nam nihil maxime inventore illo. Blanditiis cumque beatae nostrum ut a quam in, 
        //     consectetur vero necessitatibus quas. Unde sequi animi,',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
