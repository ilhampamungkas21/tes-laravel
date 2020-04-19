<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID'); //id-ID adalah kode negara
 		
    	for($i = 1; $i <= 15; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('employees')->insert([
    			'nama' => $faker->name,
    			'email' => $faker->email,
    			'company_id' =>6
    		]);
 
    	}
    }
}
