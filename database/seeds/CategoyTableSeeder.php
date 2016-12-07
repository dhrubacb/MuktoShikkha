<?php

use Illuminate\Database\Seeder;

class CategoyTableSeeder extends Seeder
{
    
    public function run()
    {
        //
         DB::table('category')->insert(
                        array(
                        	 array(
                        	 		'class_id'=>'class6',
					    			'class'=>'ষষ্ঠ শ্রেণী',
					    			'subject_id'=>'bangla',
					    			'subject'=>'বাংলা',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321061417/content?start_page=1&view_mode=scroll&access_key=key-ZIaiNA9qez9KoigexMyJ&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_11305" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6bangla'
					    		),
                               array(
                               	'class_id'=>'class6',
					    			
					    			'class'=>'ষষ্ঠ শ্রেণী',
					    			'subject_id'=>'english',
					    			'subject'=>'English for Today',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626830/content?start_page=1&view_mode=scroll&access_key=key-jWNcRztHVxyRK0kV9Zfj&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_92045" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6english'
					    		),

					    		 array(
					    			'class_id'=>'class6',
					    			
					    			'class'=>'ষষ্ঠ শ্রেণী',
					    			'subject_id'=>'math',
					    			'subject'=>'গণিত',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626729/content?start_page=1&view_mode=scroll&access_key=key-hHt0mbkLJN0b18G8VbKb&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_30299" width="600" height="800" frameborder="0"></iframe>',
					    			'page_url'=>'class6science'
					    			),
					    		 array(
					    			'class_id'=>'class6',
					    			
					    			'class'=>'ষষ্ঠ শ্রেণী',
					    			'subject_id'=>'science',
					    			'subject'=>'বিজ্ঞান',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626729/content?start_page=1&view_mode=scroll&access_key=key-hHt0mbkLJN0b18G8VbKb&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_30299" width="600" height="800" frameborder="0"></iframe>',
					    			'page_url'=>'class6science'
					    			),
					    		 array(
					    			'class_id'=>'class6',
					    			
					    			'class'=>'ষষ্ঠ শ্রেণী',
					    			'subject_id'=>'islam_religion',
					    			'subject'=>'ইসলাম ধর্ম',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626729/content?start_page=1&view_mode=scroll&access_key=key-hHt0mbkLJN0b18G8VbKb&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_30299" width="600" height="800" frameborder="0"></iframe>',
					    			'page_url'=>'class6science'
					    			),

					    		 	array(
					    			'class_id'=>'class7',
					    			
					    			'class'=>'সপ্তম শ্রেণী',
					    			'subject_id'=>'bangla',
					    			'subject'=>'বাংলা',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    			array(
					    			'class_id'=>'class7',
					    			
					    			'class'=>'সপ্তম শ্রেণী',
					    			'subject_id'=>'english',
					    			'subject'=>'English For Today',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'class7',
					    			
					    			'class'=>'সপ্তম শ্রেণী',
					    			'subject_id'=>'math',
					    			'subject'=>'গণিত',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'class7',
					    			
					    			'class'=>'সপ্তম শ্রেণী',
					    			'subject_id'=>'science',
					    			'subject'=>'বিজ্ঞান',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	
					    		 	array(
					    			'class_id'=>'class7',
					    			
					    			'class'=>'সপ্তম শ্রেণী',
					    			'subject_id'=>'social_science',
					    			'subject'=>'সামাজিক বিজ্ঞান',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'class7',
					    			
					    			'class'=>'সপ্তম শ্রেণী',
					    			'subject_id'=>'islam_religion',
					    			'subject'=>'ইসলাম ধর্ম',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'class8',
					    			
					    			'class'=>'অষ্টম শ্রেণী',
					    			'subject_id'=>'bangla',
					    			'subject'=>'বাংলা',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    				'class_id'=>'class8',
					    			
					    			'class'=>'অষ্টম শ্রেণী',
					    			'subject_id'=>'english',
					    			'subject'=>'English For Today',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    		 			'class_id'=>'class8',
					    			
					    			'class'=>'অষ্টম শ্রেণী',
					    			'subject_id'=>'math',
					    			'subject'=>'গণিত',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    		 			'class_id'=>'class8',
					    			
					    			'class'=>'অষ্টম শ্রেণী',
					    			'subject_id'=>'science',
					    			'subject'=>'বিজ্ঞান',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'ssc',
					    			
					    			'class'=>'মাধ্যমিক',
					    			'subject_id'=>'bangla',
					    			'subject'=>'বাংলা',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'ssc',
					    			
					    			'class'=>'মাধ্যমিক',
					    			'subject_id'=>'english',
					    			'subject'=>'English For Today',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'ssc',
					    			
					    			'class'=>'মাধ্যমিক',
					    			'subject_id'=>'math',
					    			'subject'=>'গণিত',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'ssc',
					    			
					    			'class'=>'মাধ্যমিক',
					    			'subject_id'=>'physics',
					    			'subject'=>'পদার্থ বিজ্ঞান',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'ssc',
					    			
					    			'class'=>'মাধ্যমিক',
					    			'subject_id'=>'chemistry',
					    			'subject'=>'রসায়ন',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'ssc',
					    			
					    			'class'=>'মাধ্যমিক',
					    			'subject_id'=>'biology',
					    			'subject'=>'জীববিজ্ঞান',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'ssc',
					    			
					    			'class'=>'মাধ্যমিক',
					    			'subject_id'=>'higher_math',
					    			'subject'=>'উচ্চতর গণিত',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'ssc',
					    			
					    			'class'=>'মাধ্যমিক',
					    			'subject_id'=>'ict',
					    			'subject'=>'তথ্য ও যোগাযোগ প্রযুক্তি',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'hhc',
					    			
					    			'class'=>'উচ্চ মাধ্যমিক',
					    			'subject_id'=>'bangla',
					    			'subject'=>'বাংলা',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'hhc',
					    			
					    			'class'=>'উচ্চ মাধ্যমিক',
					    			'subject_id'=>'english',
					    			'subject'=>'English For Today',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'hhc',
					    			
					    			'class'=>'উচ্চ মাধ্যমিক',
					    			'subject_id'=>'physics',
					    			'subject'=>'পদার্থ বিজ্ঞান',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'hhc',
					    			
					    			'class'=>'উচ্চ মাধ্যমিক',
					    			'subject_id'=>'chemistry',
					    			'subject'=>'রসায়ন',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'hhc',
					    			
					    			'class'=>'উচ্চ মাধ্যমিক',
					    			'subject_id'=>'botany',
					    			'subject'=>'উদ্ভিদ বিজ্ঞান',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),
					    		 	array(
					    			'class_id'=>'hhc',
					    			'class'=>'উচ্চ মাধ্যমিক',
					    			'subject_id'=>'zoology',
					    			'subject'=>'প্রানী বিদ্যা',
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			),

					    		 	array(
					    			'class_id'=>'hhc',
					    			'class'=>'উচ্চ মাধ্যমিক',
					    			'subject_id'=>'ict',
					    			'subject'=>'তথ্য ও যোগাযোগ প্রযুক্তি',
					    			
					    			'book_link'=> '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/321626930/content?start_page=1&view_mode=scroll&access_key=key-t63ybjeVFjHFnANSp19c&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_52871" width="100%" height="600" frameborder="0"></iframe>',
					    			'page_url'=>'class6math'
					    			)

                    ));

    }
}
