@extends('Blade_code.header_footer_2')
 @section('top_header')

{!! Html::Script('js/ckeditor/ckeditor.js') !!}

{!! Html::script('js/crud.js') !!}  
  <div class="container">
  <div class="main_items">
    <div class="question">
      <div class="ques_title"> 
        <h3>{{ $question->ques_title }}</h3>
      </div>
             <hr>
      <div class="ques_detail">
      <div class="row">
      <div class="col-md-1">5 <span class="glyphicon glyphicon-thumbs-up"></span></div>
      <div class="col-md-9">
      <p style="background-color:#FFFFF1"><?php echo nl2br($question->ques_detail); ?> </p>
      </div>
      
      <div class="col-md-2"></div>
      </div>
      <ul class="ques_bottom" style="list-style-type: none;">
     <li> <h4 style="display:inline;">Asked by <a href="#">{{$asker->name}},</a></h4></li>
      
      <li><h5 style="display:inline;">2 days ago</h5></li>
      @if($asker->name == Auth::id())
      <li><a href="{{ route('question.update',['id' => $question->id ]) }}">Edit</a></li>
    
      <li><a href="localhost:8000/delete_ques">Delete</a></li>
      @else
      <li><a href="localhost:8000/report_ques">Report</a></li>
      @endif
       </ul>
      <hr>
      <div style="border:solid black 1px; background-color: #ffffe2 "><h5>Result of the Question - {{$count}} Answers </h5></div>
      <br><br>

      <div class="answer">
      <hr>
      @foreach($answer as $answers)
      <div class="row">
      <div class="col-md-1">
      <a href="#">{{ App\User::find($answers->user_id)->pluck('name') }}</a>
      </div>
      
      <div class="col-md-9">
      <p>Answer: {!!html_entity_decode($answers->answer)!!}</p>
      </div>
      </div>
      <hr>
  @endforeach
      </div>

      
<hr>
     
      <div class="row">
      <div class="col-md-9">
      <h4>Your Answer</h4>
      
      {!! Form::open(array('url' => 'answer/store', 'method'=>'POST')) !!}
   
       <textarea class="form-control" name="answer" rows="4" cols="10" id="answer"></textarea>
        
         <br>
        <input type="hidden" name="ques_id" value="{{ $question->id }}">
         <?php
     $userId = Auth::id();
     
     ?>
      <input type="hidden" name="user_id" value="<?php
    echo $userId;
     ?>">
        <button type="submit" class="btn btn-success" >Add Answer</button> 
          
        {!! Form::close() !!}

   

<script>
 $(document).ready(function(){
    $("button").on({
      click: function(){
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault(); 

           
      $.ajax({
        url   : "/store",
        type  : "POST",
      
        dataType: 'json',
        data  : {
                'answer' :answer,
                'id':ques_id,
                'user_id':user_id
        },
        success:function(){
        alert('1');
      }
      });
        }
    });
});


 $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });


$(document).ready(function(){

   $('save').submit(function(){
    
   var answer = $('#answer').val();
      var ques_id = $('#ques_id').val();
      var user_id = $('#user_id').val();

    $.post('register' , {answer:answer , ques_id:ques_id, user_id: user_id} , function(data){


       console.log(data);

     });

  });


});



</script>
        </form>

<script>
           CKEDITOR.replace( 'answer' );
        </script>
        </div>
        </div>
      </div>

  </div>
</div>
</div>

<script type="text/javascript">
  
</script>


 @section('footer')

    
        @endsection
          @endsection