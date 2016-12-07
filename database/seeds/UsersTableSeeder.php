<?php


use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


                    DB::table('users')->insert(
                        array(
                               array(
					    			'name'=>'monu',
					    			'email'=>'asd@dfg.com',
					    			'password'=>  Hash::make('test'),

					    			'contact_no'=>'bangla',
					    			'birth_of_date'=>'ch2',
					    			'school_name'=>'1',
					    			'fb_link'=>'ug'
					    			),
                               array(
					    			'name'=>'monu',
					    			'email'=>'asdf@dfg.com',
					    			'password'=>  Hash::make('vvvvv'),

					    			'contact_no'=>'bangla',
					    			'birth_of_date'=>'ch2',
					    			'school_name'=>'1',
					    			'fb_link'=>'ug'
					    		
					    			)
                    ));

		}

}