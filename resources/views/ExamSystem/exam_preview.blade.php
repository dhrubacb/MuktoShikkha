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
<?php  $stack = array() ?>
	@foreach ($quiz_question as $quiz_question)
	<?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯');
$j = str_replace(range(0, 9),$bn_digits,$i+1); ?>
	@if($i%2==0)
	@foreach($answers as $answer)
	@if($answer->quizAns_id == $quiz_question->id)
	<?php array_push($stack, $answer->ans_body); ?>
	@endif
	@endforeach
	<?php $res = count($stack);
	    ?>
	<div class="row"  style="margin-bottom: 30px;">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			
			<h4 class="pre_quiz_ques">{{$j}}) {{$quiz_question->ques_body}} </h4> <a class="edit_quiz" href=""><span class="glyphicon glyphicon-pencil"></span></a>
		<div class="row">
			<div class="quiz_option col-md-5">ক) {{$stack[$res-4]}}</div>
			<div class="col-md-1"></div>
			<div class="quiz_option col-md-5">খ) {{$stack[$res-3]}} </div>
		</div>
		<div class="row">
			<div class="quiz_option col-md-5">
				গ) {{$stack[$res-2]}}
			</div>
		<div class="col-md-1"></div>
			<div class="quiz_option col-md-5">ঘ) {{$stack[$res-1]}}</div>
		</div>
		</div>

		<div class="col-md-1"></div>
		@else
		@foreach($answers as $answer)
	@if($answer->quizAns_id == $quiz_question->id)
	<?php array_push($stack, $answer->ans_body); ?>
	@endif
	@endforeach
	<?php $res = count($stack);
	    ?>
		<div class="col-md-4">
			
			<h4 class="pre_quiz_ques">{{$j}}) {{$quiz_question->ques_body}} </h4> <a class="edit_quiz" href=""><span class="glyphicon glyphicon-pencil"></span></a>
		<div class="row">
			<div class="quiz_option col-md-5">ক) {{$stack[$res-4]}}</div>
			<div class="col-md-1"></div>
			<div class="quiz_option col-md-5">খ) {{$stack[$res-3]}}</div>
		</div>
		<div class="row">
			<div class="quiz_option col-md-5">
				গ) {{$stack[$res-2]}}
			</div>
		<div class="col-md-1"></div>
			<div class="quiz_option col-md-5">ঘ) {{$stack[$res-1]}}</div>
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