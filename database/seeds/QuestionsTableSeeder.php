<?php


use Illuminate\Database\Seeder;


class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


                    DB::table('question')->insert(
                        array(
                               array(
					    			'ques_title'=>'ডপ্লার ক্রিয়া কিভাবে কাজ করে?',
					    			'ques_detail'=>'asdg.com',
					    			'class'=> 'hsc',
					    			'subject'=>'physics',
					    			'chapter'=>'ch11',
					    			'user_id'=>'1'
					    			),
                               array(
					    			'ques_title'=>'১/০ = অসংজ্ঞাইত কেন',
					    			'ques_detail'=>'aschcddfg.com',
					    			'class'=> 'class8',
					    			'subject'=>'math',
					    			'chapter'=>'ch1',
					    			'user_id'=>'1'
					    		
					    			),
                                array(
					    			'ques_title'=>'ইংরেজীতে সবচে বড় ওয়ার্ড কি?',
					    			'ques_detail'=>'aschcddfg.com',
					    			'class'=> 'class6',
					    			'subject'=>'english',
					    			'chapter'=>'ch10',
					    			'user_id'=>'1'
					    		
					    			)
                    ));

		}

}