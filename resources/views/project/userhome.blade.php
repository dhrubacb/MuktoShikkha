@extends('project.Blade_code.userpage')

@section('header')

     @section('sidebar')

  


    
    <div class="content">


         {!! Form::open(array('route' => 'postuserhome', 'class' => 'formRegister' , 'id' => 'blogsave' , 'method'=>'POST')) !!}
       
                
       <div class="row">
            <div class="col-md-12">
            <div class="blog_title">
            <h3>লিখুন আপনার ব্লগ</h3>
    
       <div class="title_form">
        
               <input type="text" class="form-control" name="blog_title" id = "title" placeholder="ব্লগের শিরোনাম....">


             </div>
             </div>
          
       <div class="form-group">
       
               <textarea class="form-control" name="blog_detail" rows="10" placeholder="বিস্তারিত লিখুন এইখানে....." id="detail"></textarea>
       </div>

          <button class="btn btn-success" type="submit" id = "submit">সাবমিট</button>

      </div>
   </div>

      <!-----Start  Bullshit part of coding   -------------->

                   <input  type="hidden" name="email_id"  value="{{ $email }}">

                   <input  type="hidden" name="picture"  value="{{ $picture }}">


      <!-----End  Bullshit part of coding      -------------->


     {!! Form::close() !!}


    	<h1> আপনার সর্বশেষ ব্লগ </h1>

    
  

 </div>
    <div class="clear"></div>
</div> 

@endsection

     @section('footer')

     @endsection

<!--

<script  type = "text/javascript">
  
$(document).ready( function(){


$(function(){


$('#submit').on('click' , function(e){

  e.preventDefault();
 
  var data = $("formRegister").serialize();

   $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });


   $.ajax({
   
        type   :  'post' ,
        url    :  '{!! URL::route('userhome')   !!}',
        data   :   data,

        success : function(data){

          alert(data.sms);
        }.error : function(){

          alert(data.err);
        }

   });

  $('formregister')[0].reset();


}) ;


}


});

</script>
-->

<script type="text/javascript">
  
 $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });


$(document).ready(function(){

   $('#blogsave').submit(function(){
    

    var title = $('#title').val();
    var detail = $('#detail').val();


    $.post('register' , {blog_title:title , blog_detail:detail} , function(data){


       console.log(data);

     });

  });


});

</script>


@endsection



