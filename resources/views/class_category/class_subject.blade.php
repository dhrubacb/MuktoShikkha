@extends('Blade_code.Header_footer')
 @section('top_header')
  @section('lower_header')
{!! Html::script('js/isotope-docs/isotope.pkgd.js') !!}

<!--Content-->
<div class="gap">a
</div>


 <div class="row">
  <div class="col-md-3">
    <ul class="side_nav">

      @foreach($classes as $class)
    <li>
   
     @if ($class->subject_id== $subjects->subject_id)
      <div class="button-group filter-button-group">
        <button data-filter="*"  class="subjects_active" ><h4 class="panel-title">
          <div data-toggle="collapse" href="#collapse1" > {{$subjects->subject}}</div>
        </h4></button>
            
          <div id="collapse1" class="panel-collapse collapse">
            <ul class="list-group">

            @foreach($chapters as $chapter)
             <button class="button list-group-item" data-filter="{{'.'.$chapter->chapter_id}}"><p style="text-align:center;"> {{$chapter->chapter_name}}</p></button>
             @endforeach
           </ul>
           </div>
    </div> 
    
    @else

    <a class="subjects_not_active" href=" {{ route('subjectcategory',['class'=>$class->class_id,'subject' => $class->subject_id ]) }}" ><h4 class="panel-title">
           {{$class->subject}}
        </h4></a>
          @endif
  </li>


@endforeach



</ul>
        </div>
    
     <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       {!! $subjects->book_link !!}
</div>


 
      
<div class="col-md-9">
<div class="row">
<div class="col-md-1" class="read_book" style="margin-top:55px;padding-bottom:3px;padding-top:10px;background-color:#e7e7e7;"><div ><span style="font-size:24px;text-align:center;padding-left:16px;margin-left:2px;" style="cursor:pointer;margin-left:2px;" onclick="openNav()">&#9776; <p style="font-size:24px;text-align:center;padding-left:2px;margin-left:2px;"> বই পড়ুন</p></span></div></div>
<div class="col-md-11">
<div id="main">
 
        <h3 style="text-align:center;">Questions on Class 6</h3>
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">
        <div class="grid">
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
            <h5>{{ $string }}</h5>
        <br></div>
     
       @endforeach
        </div>
    </div>
       </div>
       </div>
</div>

</div>
</div>

</div>  
 
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "520px";
    document.getElementById("main").style.marginLeft = "390px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>     
       
        </div>
        
<script type="text/javascript">
  // external js: isotope.pkgd.js

var $grid = $('.grid').isotope({
  itemSelector: '.grid-item',
  stagger: 30
});

$('.filter-button-group').on( 'click', '.button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});

</script>
 <div style="margin-bottom: 450px"></div>

     @section('footer')

        @endsection
          @endsection
            @endsection
