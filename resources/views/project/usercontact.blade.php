@extends('project.Blade_code.userpage')

@section('header')


     @section('sidebar')

     @endsection

     
    <div class="content">
    	<h1>Contact</h1>
        
       {!! Form::open(array('route' => 'messagestore', 'method'=>'POST')) !!}



        	<div>
            	<span><label>Name</label></span>
                <span><input type="text" value="" /></span>
            </div>

        	<div>
            	<span><label>Email</label></span>
                <span><input type="text" value="" /></span>
            </div>
        	<div>

            	<span><label>Subject</label></span>
                <span><textarea></textarea></span>
            </div>
            
        	<div>
                <span><input type="submit" value="Submit"></span>
            </div>
          
          {!! Form::close() !!}



    </div>
    <div class="clear"></div>
</div> 
>



     @section('footer')

     @endsection

@endsection