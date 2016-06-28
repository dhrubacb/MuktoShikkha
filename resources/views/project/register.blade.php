@extends('project.Blade_code.header_footer')

@section('header')



     <div class="container">
        <div class="register">
       
<!--<form method="POST" files = "true" action="postregister">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" > -->

{!! Form::open(array('route' => 'postregister' , 'files' => true) ) !!}


    <div class="row">

      <div class="col-sm-3">
      </div>
      
      <div class="col-sm-6">
      <h1>Create an account</h1>
          <h4>It's free and always will be</h4 ><br>
    <div class="row">
      <div class="col-sm-6">
       <input type="text" class="form-control" name="firstname" maxlength="80" placeholder="First Name">
       </div>
       <div class="col-sm-6">
       <input type="text" class="form-control" name="lastname" maxlength="80"  placeholder="Surname">
       </div>
       </div>
       <br>
     
       <input type="email" class="form-control" name="email" maxlength="80"  placeholder="Email address">
       <br>
        
     
       <input type="password" class="form-control" name="password" maxlength="80" placeholder="Password">
       

    <br>
     
       <input type="password" name="password_confirmation" class="form-control" name="ques_title" maxlength="80" placeholder="Confirm Password">
      
        <br>
        <h4>Gender:</h4> 
           <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other" > Other<br><br>
    Birthday:
  <input type="date" name="birthdate"><br>


  <div class="form-group">
    {!! Form::label('Product Image') !!}
    {!! Form::file('image') !!}
</div>



<br><br>
        <button type="Submit" class="btn btn-success">Register</button>
    <br><br>
     </div>
    
   </div>
{!! Form::close() !!}
</div>
  </div>

@section('footer')

@endsection


@endsection