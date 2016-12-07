@extends('Blade_code.header_footer_2')

@section('top_header')
  <style type="text/css">
    body{
        background-color: #E9EBEE;
    }
    .login{
        width:660px;
        height: 400px;
        padding-left: 150px;
        margin-left: 340px;
        margin-top: 100px;
        background-color: #fff;
    }
</style>

<div class=login>
    <div class="row">

      
      <div class="col-md-8">
    
      <h3 style="text-align:center;color:#286090">লগ ইন</h3>
          <br>

<form   method="POST" action="{!! action('Auth\AuthController@doLogin') !!}">
    {!! csrf_field() !!}

   <div class="form-group">
        
        <input name = "email" type="email" class="form-control" id="email" placeholder="ইমেইল">
    </div>
<br>
  
         <div class="form-group">
        <input name = "password" type="password" class="form-control" id="pwd" placeholder="পাসওয়ার্ড">
   </div>

    <div>
        <input type="checkbox" name="remember"> মনে রাখুন
    </div> 
<br>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>
@endif   

    <div>
        <button type="submit" class="btn btn-success btn-block">লগ ইন</button>
    </div>

</form>


<br>
<p style="display:inline;">একাউন্ট নেই?</p><a href="register" style="padding-left: 5px; display:inline;">একাউন্ট খুলুন বিনামূল্যে </a> 
</div>
</div>
</div>


 @section('footer')

      @endsection
        @endsection