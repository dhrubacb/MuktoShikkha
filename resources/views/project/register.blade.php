@extends('Blade_code.header_footer_2')

@section('top_header')



     <div class="container">
        <div class="register">
       
<!--<form method="POST" files = "true" action="postregister">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" > -->

{!! Form::open(array('route' => 'postregister',  'files' => true , 'method' =>'POST') ) !!}


    <div class="row">

      <div class="col-sm-3">
      </div>
      
      <div class="col-sm-6">
      <h1>Create an account</h1>
          <h4>It's free and always will be</h4 ><br>
    <div class="row">
      <div class="col-sm-6">
       <input type="text" class="form-control" name="name" maxlength="80" placeholder="Name" required title="এই ফিল্ডটি বাধ্যতামূলক"/>
       </div>
       <div class="col-sm-6">
       
       </div>
       </div>
       <br>
     
       <input type="email" class="form-control" name="email" maxlength="80"  placeholder="Email address" required title="এই ফিল্ডটি বাধ্যতামূলক"/>
       <br>
        
     
       <input type="password" class="form-control" name="password" maxlength="80" placeholder="Password" required title="এই ফিল্ডটি বাধ্যতামূলক"/>
       

    <br>
     
       <input type="password" name="password_confirmation" class="form-control" name="ques_title" maxlength="80" placeholder="Confirm Password" required title="এই ফিল্ডটি বাধ্যতামূলক"/>
      
        <br>
        <h4>Gender:</h4> 
           <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other" > Other<br><br>
    Birthday:
  <input type="date" name="birth_of_date"><br><br><br>

  <input type="text" class="form-control" name="about" maxlength="800" placeholder="নিজের সম্পর্কে কিছু বলুন"> <br><br>

  <input type="text" class="form-control" name="school_name" maxlength="800" placeholder="স্কুলের নাম"> <br><br>

   <input type="text" class="form-control" name="college_name" maxlength="800" placeholder="কলেগের নাম"> <br><br>

   
   <input type="text" class="form-control" name="university_name" maxlength="800" placeholder="বিশ্ববিদ্যালয়ের নাম"> <br><br>

   <input type="text" class="form-control" name="contact_no" maxlength="800" placeholder="মোবাইল নম্বর"> <br><br>

   <input type="text" class="form-control" name="fb_link" maxlength="800" placeholder="ফেসবুক লিঙ্ক"> <br><br>
<!-- 

  <div class="form-group">
    {!! Form::label('Product Image') !!}
    {!! Form::file('image') !!}
</div>
 -->


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