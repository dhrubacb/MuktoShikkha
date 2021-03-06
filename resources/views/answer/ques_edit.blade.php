@extends('Blade_code.header_footer_2')
@section('top_header')
 {!! Html::Script('js/ckeditor/ckeditor.js') !!}
  <div class="container">
  <div class="add_ques">

      {!! Form::model($question, array('route' => array('update', $question->id), 'method' => 'PUT')) !!}
  <meta name="csrf-token" content="{{ csrf_token() }}">
      
        <div class="row">
      <div class="col-sm-8">
      <div class="ques_title">
      <h3>Title</h3>
     
       <div class="title_form">
        <div class="row">
      <div class="col-sm-12">
       <input type="text" class="form-control" name="ques_title" maxlength="80"  placeholder="" required>
       </div>
       <script type="text/javascript">
         $('input[name="ques_title"]').val('{{$question->ques_title}}');
       </script>
       </div>
       </div>
       </div>
       <br><hr>      
       <div class="form-group"">
       <h3>Details about your question:</h3>
       <textarea placeholder="" class="form-control" name="ques_detail" rows="7" id="comment">{{$question->ques_detail}}
  </textarea>
       </div>
       <script>
           CKEDITOR.replace( 'ques_detail');
        </script>
         </div>
      </div><br/>
   <br>
   <hr>
  

      <div class="csc">
      <div class="row">
      <div class="col-md-3">
        <div class="tag_class">
             <h4>Choose Class:</h4>
     <select name="class_id" class="form-control" id="classID">
      <option value="" hidden>Please Select a Class</option>
      <option value="class6">Class Six</option>
  <option value="class7">Class Seven</option>
  <option value="class8">Class Eight</option>
  <option value="ssc">SSC</option>
  <option value="hhc1">HSC 1st Year</option>
  <option value="hhc2">HSC 2nd Year</option>
    </select>
  </div>

  </div>
        <div class="col-md-3">
              <div class="tag_subject">
          <h4>Choose Subject: </h4>
  <div class="form-group">
    <select name="subject_id" class="form-control" id="selectedSubject">
      <option value="" hidden>Please Select a Subject</option>

    </select>
   </div>
      </div></div>

  <div class="col-md-3">
                  <div class="tag_chapter">
                <h4>Choose Chapter:</h4>
          <select name="chapter_id" class="form-control" id="selectedChapter">
           <option value="" hidden>Please Select a Chapter</option>
       
  </select>
        </div>
      </div>
</div>
</div>
<br><hr>
<br>
<input type="hidden" name="id" value="{{$question->id}}">
  <script type="text/javascript" charset="utf-8">
  //depandable dropdown start
  var class_id;
    $('#classID').on('click', function(e){

     class_id = e.target.value;
     
      //ajax
      var path =  "<?php echo URL::route('apiroute'); ?>";

      $.get(path+'?class_id='+class_id, function(data){

      

        $('#selectedSubject').empty();

        $.each(data, function(index, selectedSubject){

          $('#selectedSubject').append('<option value="' + index +'">'               // this returns the value
              + selectedSubject+ '</option>'); //this returns the key
        });
      });
    });
 
      $('#selectedSubject').on('click', function(e){

    var subject_id = e.target.value;


      var path =  "<?php echo URL::route('aproute'); ?>";
      
      $.get(path+'?class_id='+class_id+'&'+'subject_id='+subject_id, function(data){

        console.log(data);

        $('#selectedChapter').empty();

        //$('#section').append('<option value=""> Please choose one</option>');

        $.each(data, function(index, selectedChapter){

          $('#selectedChapter').append('<option value="' + index +'">'               // this returns the value
              + selectedChapter+ '</option>'); //this returns the key
        });
      });
    });

  </script>

 <div class="col-sm-6">
      <div class="tags">
      <h3>Add Tag</h3><h4></h4>
     
       <div class="title_form">
      <input type="text" class="form-control" name="tag" maxlength="80"  placeholder="Add Tags...">
       </div>
     </div>
     <br><br>
     <?php
     $userId = Auth::id();
     ?>
      <input type="hidden" name="id" value="<?php
    echo $userId;
     ?>">
       <button class="btn btn-success" type="submit">Update Question</button>
      </div>
 
 {!! Form::close() !!}
</div>

  </div>
  <br><br><br><br>
  </div>
  
  @endsection