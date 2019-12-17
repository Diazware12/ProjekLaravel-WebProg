<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
            'name'=> 'ngetest',
            'email'=>'ngetest@yahoo.com',
            'password'=>bcrypt('ngetest'),
            'role'=>1,
            'gender'=>'male',
            'address'=>'jl raya binus',
            'DOB'=>'1997-05-27',
            'picture'=>'picture.jpg'
            ],
            [
            'name'=> 'ngetest2',
            'email'=>'ngetest2@yahoo.com',
            'password'=>bcrypt('ngetest'),
            'role'=>2,
            'gender'=>'male',
            'address'=>'jl raya binus',
            'DOB'=>'1997-05-27',
            'picture'=>'picture.jpg'
            ]
            
        ]);
    }
}
