<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->delete();
    	$tracker_array = array
    	(
    		array(1,"Joe","M",29,"Teacher1"),
    		array(2,"John","F",29,"Teacher2"),
    		array(3,"Abin","M",29,"Teacher1"),
    	);

    	foreach ($tracker_array as $key => $value) {
    		DB::table('students')->insert([
    			'id' => $value[0],
    			'name' => $value[1],
    			'gender' => $value[2],
    			'age' => $value[3],
    			'reporting_teacher' => $value[4]  
    		]);
    	}	
    }
}
