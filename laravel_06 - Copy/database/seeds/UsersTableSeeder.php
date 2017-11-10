<?php

use Illuminate\Database\Seeder;
use App\Users;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$fake = Faker\Factory::create();
    	for ($i=0; $i < 100; $i++) { 
    		Users::where('id', $i+1)->update([
    			'mobile' => $faker->phoneNumber,
    			'address' => $faker->address,
    			'name' => $faker->name,
    			'email' => $faker->email,
    			'password' => $faker->password
    		]);
    	}
        
    }
}
