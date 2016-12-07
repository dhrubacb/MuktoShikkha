@extends('Blade_code.header_footer_2')
@section('top_header')

<div class="content">
<div class="container">
<h3 style="text-align: center;margin-bottom: 20px;">পরীক্ষার নামঃ {{$exam->exam_title}}</h3>

<?php
           $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯');
$output = str_replace(range(0, 9),$bn_digits,$count); 
?>
<h4 style="text-align: center;margin-bottom: 10px;">পরীক্ষার বিবরনঃ {{$exam->exam_detail}}</h4>

	<h4 style="text-align: center;">পূর্ণমান: {{$output}}</h4>
	<h4 style="text-align: center;">সময়ঃ ১ ঘণ্টা ৩০ মিনিট</h4>
	
<hr>
<?php
$i=0; ?>
<div class="quiz_preview">
	@foreach ($quiz_question as $quiz_question)
	@if($i%2==0)
	<div class="row"  style="margin-bottom: 30px;">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			
			<h4>১) {{$quiz_question->ques_body}}</h4>
		<div class="row">
			<div class="col-md-5">ক) কি বল্মু বুঝি না</div>
			<div class="col-md-1"></div>
			<div class="col-md-5">খ) কেন বুঝস না? </div>
		</div>
		<div class="row">
			<div class="col-md-5">
				গ) কি কস না 
			</div>
		<div class="col-md-1"></div>
			<div class="col-md-5">ঘ) বাল আমার বাল</div>
		</div>
		</div>

		<div class="col-md-1"></div>
		@else
		<div class="col-md-4">
			
			<h4>১){{$quiz_question->ques_body}}</h4>
		<div class="row">
			<div class="col-md-5">ক) কি বল্মু বুঝি না</div>
			<div class="col-md-1"></div>
			<div class="col-md-5">খ) কেন বুঝস না? </div>
		</div>
		<div class="row">
			<div class="col-md-5">
				গ) কি কস না 
			</div>
		<div class="col-md-1"></div>
			<div class="col-md-5">ঘ) বাল আমার বাল</div>
		</div>
		</div>
		
	</div>
	@endif
	<?php $i++; ?>
	@endforeach
</div>
</div>
</div>
@endsection