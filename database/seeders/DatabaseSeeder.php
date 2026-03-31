<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'id'          => 1,
                'author'      => 'Abraham Silberschatz',
                'nationality' => 'Israelis / American',
                'birth_year'  => '1952',
                'fields'      => 'Database Systems, Operating Systems',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'id'          => 2,
                'author'      => 'Andrew S. Tanenbaum',
                'nationality' => 'Dutch / American',
                'birth_year'  => '1944',
                'fields'      => 'Distributed computing, Operating Systems',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);

        DB::table('publishers')->insert([
            [
                'id'         => 1,
                'publisher'  => 'John Wiley & Sons',
                'country'    => 'United States',
                'founded'    => 1807,
                'genere'     => 'Academic',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'         => 2,
                'publisher'  => 'Pearson Education',
                'country'    => 'United Kingdom',
                'founded'    => 1944,
                'genere'     => 'Education',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('books')->insert([
            [
                'id'           => 1,
                'title'        => 'Operating System Concepts',
                'edition'      => '9th',
                'copyright'    => 2012,
                'language'     => 'ENGLISH',
                'pages'        => 976,
                'author_id'    => 1,
                'publisher_id' => 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'id'           => 2,
                'title'        => 'Database System Concepts',
                'edition'      => '6th',
                'copyright'    => 2010,
                'language'     => 'ENGLISH',
                'pages'        => 1376,
                'author_id'    => 1,
                'publisher_id' => 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'id'           => 3,
                'title'        => 'Computer Networks',
                'edition'      => '5th',
                'copyright'    => 2010,
                'language'     => 'ENGLISH',
                'pages'        => 960,
                'author_id'    => 2,
                'publisher_id' => 2,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'id'           => 4,
                'title'        => 'Modern Operating Systems',
                'edition'      => '4th',
                'copyright'    => 2014,
                'language'     => 'ENGLISH',
                'pages'        => 1136,
                'author_id'    => 2,
                'publisher_id' => 2,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}