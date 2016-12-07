@extends('Blade_code.header_footer_2')
@section('top_header')
 
  <div class="container">
  <div class="add_ques">

        {!! Form::open(array('url' => 'exam/create', 'method'=>'POST')) !!}
      
        <meta name="csrf-token" content="{{ csrf_token() }}">
      
        <div class="row">
      <div class="col-sm-8">
      <div class="ques_title">
      <h3>Title</h3>
     
       <div class="title_form">
        <div class="row">
      <div class="col-sm-12">
       <input type="text" class="form-control" name="exam_title" maxlength="80"  placeholder="Title of your exam..." required>
       </div>
       </div>
       </div>
       </div>
       <br><hr>      
       <div class="form-group"">
       <h3>Add Description:</h3>
       <textarea placeholder="Details about your question..." class="form-control" name="exam_detail" rows="7" id="exam_detail">
  </textarea>
       </div>
      
  </div>
      </div><br/>
   <br>
   <hr>
  <
  <div class="exam_timing">
      <div class="row">
        <div class="col-md-4">
          <div class="start_time">
          <h4>Start Time:</h4>
            <input type="datetime-local" class="form-control" name="start_time">
        </div>
        </div>
        <div class="col-md-4">
            <div class="end_time">
            <h4>End Time:</h4>
            <input type="datetime-local" class="form-control" name="end_time">
          </div>
        </div>
      </div>
   </div>
   <br>
   <hr>
   <br>
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
     
     <br><br>
     <?php
     $userId = Auth::id();
     
     ?>
      <input type="hidden" name="id" value="<?php
    echo $userId;
     ?>">
       <button class="btn btn-success" type="submit">Create Exam</button>
      </div>
   
    {!! Form::close() !!}
 
</div>

  </div>
  <br><br><br><br>
  </div>
  
  @endsection