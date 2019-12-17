<?php
use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::insert([
            [
                'title'=> 'testsatu',
                'genre_id'=>'1',
                'description'=>'test',
                'rating'=>'0.0',
                'picture'=>'test'
            ],
            [
                'title'=> 'testdua',
                'genre_id'=>'1',
                'description'=>'test',
                'rating'=>'0.0',
                'picture'=>'test'
            ]
            ,
            [
                'title'=> 'testtiga',
                'genre_id'=>'1',
                'description'=>'test',
                'rating'=>'0.0',
                'picture'=>'test'
            ]
            ,
            [
                'title'=> 'testempat',
                'genre_id'=>'1',
                'description'=>'test',
                'rating'=>'0.0',
                'picture'=>'test'
            ]
            ,
            [
                'title'=> 'testlima',
                'genre_id'=>'1',
                'description'=>'test',
                'rating'=>'0.0',
                'picture'=>'test'
            ]
            ,
            [
                'title'=> 'testenam',
                'genre_id'=>'1',
                'description'=>'test',
                'rating'=>'0.0',
                'picture'=>'test'
            ]
            ,
            [
                'title'=> 'testtujuh',
                'genre_id'=>'1',
                'description'=>'test',
                'rating'=>'0.0',
                'picture'=>'test'
            ]
            ,
            [
                'title'=> 'testdelapan',
                'genre_id'=>'1',
                'description'=>'test',
                'rating'=>'0.0',
                'picture'=>'test'
            ]
            ,
            [
                'title'=> 'testsembilan',
                'genre_id'=>'1',
                'description'=>'test',
                'rating'=>'0.0',
                'picture'=>'test'
            ]
            ,
            [
                'title'=> 'testsepuluh',
                'genre_id'=>'1',
                'description'=>'test',
                'rating'=>'0.0',
                'picture'=>'test'
            ]
            ,
            [
                'title'=> 'test',
                'genre_id'=>'1',
                'description'=>'test',
                'rating'=>'0.0',
                'picture'=>'test'
            ]

        ]
        );
        
    }
}
