<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marks')->delete();
    	$tracker_array = array
    	(
    		array(1,1,"One",10,20,30),
    		array(2,1,"Three",40,10,20),
    		array(3,1,"Two",50,10,30),

            array(4,2,"One",20,20,20),
            array(5,2,"Three",50,10,20),
            array(6,2,"Two",60,10,30),

            array(7,3,"One",80,10,30),
            array(8,3,"Three",10,10,20),
            array(9,3,"Two",10,10,10),
    	);

    	foreach ($tracker_array as $key => $value) {
    		DB::table('marks')->insert([
    			'id' => $value[0],
    			'student_id' => $value[1],
                'term' => $value[2],
    			'maths' => $value[3],
    			'science' => $value[4],
    			'history' => $value[5]  
    		]);
    	}	
    }
}
