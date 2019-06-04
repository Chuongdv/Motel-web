<?php

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
        // $this->call(UsersTableSeeder::class);
         DB::table('users')->insert(['name'=>'admin','email'=>'chuongvd98@gmail.com', 'birthday' =>'1998-04-04', 'password'=>bcrypt('admin'), 'gender'=>'Nam', 'Rolle'=>'1']);
    }
}
