<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

           App\User::create([
            'name' => 'A New Hope',
            'email' => 'Admin@admin.com',
            'password' => Hash::make('passwordpassword')
        ]);

       
          
           
    }
}
