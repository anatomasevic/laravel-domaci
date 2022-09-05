<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Book;
use \App\Models\Author;
use \App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Book::truncate();
        User::truncate();
        Author::truncate();
       Reservation::truncate();

        $user1=User::factory()->create();
        $user2=User::factory()->create();

        $author1=Author::factory()->create();
        $author2=Author::factory()->create();
        $author3=Author::factory()->create();

        $book2=Book::factory()->create();

        /*$book1=Book::create([
            'title'=>'neka',
        'description'=>'nesto',
            'year'=>1998,
            'publisher'=>'neko',
            'number_of_copy'=>19,
            'author_id'=>$author1->id
        ]);*/
        
        $book1=Book::factory()->create([
            'author_id'=>$author1->id
        ]);
     
        $book2=Book::factory()->create([
            'author_id'=>$author2->id
        ]);
        Book::factory(5)->create([
            'author_id'=>$author1->id
        ]);
        Book::factory(7)->create([
            'author_id'=>$author3->id
       ]);
       Reservation::factory(5)->create([
        'book_id'=>$book1->id,
        'user_id'=>$user1
    ]);
    

      
        Reservation::factory(5)->create([
            'book_id'=>$book2->id,
            'user_id'=>$user2
        ]);
/*
         \App\Models\User::factory(10)->create();
         \App\Models\Author::factory(8)->create();*/
    }
}
