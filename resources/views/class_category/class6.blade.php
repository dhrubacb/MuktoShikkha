@extends('Blade_code.Header_footer')
 @section('top_header')
  @section('lower_header')

<!--Content-->
<div class="gap">a
</div>

 <div class="row">
  <div class="col-md-3">
    <ul class="side_nav">

      @foreach($classes as $class)
    <li>
    <a class="subjects_not_active" href=" {{ route('subjectcategory',['class'=>$class->class_id,'subject' => $class->subject_id ]) }}" ><h4 class="panel-title">
           {{$class->subject}}
        </h4></a>
  </li>


@endforeach



</ul>
        </div>
    
      

        <div class="col-md-5">
        <div class="grid">
        <h3 style="text-align:center;">Questions on Class 6</h3>
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">
           @foreach($users10 as $user) 

      
         <div class="grid-item {{ $user->chapter}}" style="width:100%;">
            <a href = "{{ route('a2q',['id' => $user->id ]) }}"><h4 style="color:#3FAFD5;">{{ $user->ques_title }}</h4></a>
            <?php
            $string = strip_tags( $user->ques_detail );

if (strlen($string) > 100) {

    // truncate string
    $stringCut = substr($string, 0, 100);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'.........'; 
}
?>
            <h5>{!!html_entity_decode($string)!!}</h5>
        <br></div>
     
       @endforeach
        </div>
    </div>
       </div>
       </div>
        </div>

 
     @section('footer')

        @endsection
          @endsection
            @endsection
