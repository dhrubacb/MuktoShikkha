@extends('Blade_code.header_footer_2')
@section('top_header')

<div class="content">
<div class="container">
<h3 style="text-align: center;margin-bottom: 20px;">পরীক্ষার নামঃ {{$exam->exam_title}}</h3>

<?php
           $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯');
$output = str_replace(range(0, 9),$bn_digits,$count+1); 
?>

<h4 style="text-align: center;margin-bottom: 10px;">প্রশ্ন নম্বরঃ {{$output}}</h4>
{!! Form::model($exam, array('route' => array('exam.finish', $exam->id), 'method' => 'PUT')) !!}

<input type="hidden" name="exam_id" value="{{$exam->id}}">
 <button class="btn btn-info" style="margin:auto;display:block;" type="submit">প্রশ্নপত্রের প্রিভিউ দেখুন</button>
{!! Form::close() !!}

 <h4 class="text-center">অথবা</h4>
{!! Form::open(array('url' => 'quizques/store', 'method'=>'POST')) !!}

<div class="row" style="margin-bottom: 60px;margin-top: 50px;">
<div class="col-md-2"></div>
<div class="col-md-5">
<h4>নতুন প্রশ্ন বানান</h4>

<div class="quiz_question">


  <textarea rows="4" class="form-control" name="quiz_question" placeholder="প্রশ্ন লিখুন..."></textarea>
</div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2">
 
</div>

</div>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-5">
<h4>উত্তর</h4>
(ক) <input type="checkbox" class="check1" name="correct">এটা সঠিক উত্তর<br>
<textarea name="option1"  class="form-control"></textarea><br>
(খ) <input type="checkbox" class="check2"  name="correct">এটা সঠিক উত্তর<br>
<textarea name="option2"  class="form-control"></textarea><br>
(গ) <input type="checkbox" class="check3"  name="correct">এটা সঠিক উত্তর<br>
<textarea name="option3"  class="form-control"></textarea><br>
(ঘ) <input type="checkbox" class="check4"  name="correct">এটা সঠিক উত্তর<br>
<textarea name="option4"  class="form-control"></textarea><br>
<button type="submit" class="btn btn-success" name="" value="">প্রশ্ন যোগ করুন</button>
</div>
</div>
<br><br>
<script type="text/javascript">

   $(document).ready(function(){
        $('.check1').click(function(){
            if($(this).is(":checked")){
              $("[name='marks1']").val("1");
            }
            
        });
        $('.check2').click(function(){
            if($(this).is(":checked")){
               $("[name='marks2']").val("1");
            }
           
        });
        $('.check3').click(function(){
            if($(this).is(":checked")){
              $("[name='marks3']").val("1");
            }
           
        });
        $('.check1').click(function(){
            if($(this).is(":checked")){
               $("[name='marks4']").val("1");
            }
            
        });
        
    });


 </script>
 <input type="hidden" value="0" name="marks1">
 <input type="hidden" value="0" name="marks2">
 <input type="hidden" value="0" name="marks3">
 <input type="hidden" value="0" name="marks4">
<input type="hidden" name="exam_id" value="{{$exam->id}}">
<input type="hidden" name="user_id" value="{{$exam->user_id}}">
<input type="hidden" name="class" value="{{$exam->class}}">
<input type="hidden" name="subject" value="{{$exam->subject}}">
<input type="hidden" name="chapter" value="{{$exam->chapter}}">
 {!! Form::close() !!}
 </div>
 
 </div>
 

  @endsection