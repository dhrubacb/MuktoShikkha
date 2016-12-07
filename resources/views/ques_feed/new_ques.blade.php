@extends('Blade_code.header_footer_2')

@section('top_header')
<!--Content-->
<script type="text/javascript">

</script>


    <div class="container">
      <div class="row" style="margin-top:50px;margin-bottom:40px;">
      <div>
        <div class="col-md-2" style="margin-top:-19px;">
          <img src="/Image/Untitled.png" height="81" width="108" style="margin-left:36px;">
            <p style="margin-left:30px;">একটি বাংলা জ্ঞানকোষ</p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <br>
          <div style="display:inline; float:right;">
            <button type="button" onclick="location.href='question/create'" class="btn btn-outline-success">প্রশ্ন করুন</button>
               <button type="button" class="btn btn-outline-success">পরীক্ষা দিন</button>
             <button type="button" class="btn btn-outline-success">ব্লগ লিখুন</button>
              <button type="button" class="btn btn-outline-success">বই পড়ূন</button>
                <button type="button" class="btn btn-outline-success">আর্টিকেল</button>
          </div>
        </div>
          </div>
        </div>
        
        


 
      <div class="row">
        <div class="col-md-2" style="border-bottom:1px solid #DDD;">
          <h4 style="padding-bottom:10px; margin-top:20px;">সকল প্রশ্ন</h4>
        </div>
         <div class="col-md-4" style="border-bottom:1px solid #DDD;">
         <ul class="ques_sort" id="header">

       <li><a href="http://localhost:8000/allquastionsort/votes" class="votes">ভোট</a></li>

        <li><a href="http://localhost:8000/allquastionsort/noans" class="noAns">উত্তর নেই</a></li>

         <li><a href="http://localhost:8000/allquastionsort/newest" class="newest">সাম্প্রতিকতম</a></li>
         </ul>
         </div>
      </div>     
  
      <br>

            <div class="row">
        <div class="col-md-8" style="background:#f7f8f0;">
         @foreach($users10 as $user)
         <div class="row">
        <div class="col-md-2">
          <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <?php
        $count =  DB::table('answer')
                ->where('ques_id' , $user->id)
                ->count('id');
        ?>
        @if($count==0)
        <div style="border:1.5px solid #5F9DA1;color:#5F9DA1;padding:1px 60px 1px 10px;margin-top:10px;">
        <h5>
        <div style=" padding-left: 10px;padding-bottom:5px;"> উত্তর</div><div style=" padding-left: 13px;"> নেই</div></h5>
        </div>
        
          @else
          <?php
           $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯');
$output = str_replace(range(0, 9),$bn_digits,$count); 
?>
        <div style="background-color:#73AFB6;color:#fff;padding:1px 60px 1px 10px;margin-top:10px;">
        <h5>
        <div style="padding-left: 14px; padding-bottom:5px;">{{$output}}টি</div><div style="padding-left: 10px;"> উত্তর</div> <h5>
        </div>
@endif
        </div>
        </div>
        </div>
       
        <div class="col-md-6" style=" margin-left:30px;">
        <div>
         <h4><strong><a href="{{ route('a2q',['id' => $user->id ]) }}" style="text-decoration:none;line-height:50%;"> {{$user->ques_title}}</a></strong></h4>
         
         <button type="button" class="btn btn-default btn-sm">{{$user->class}}</button>
         <button type="button" class="btn btn-default btn-sm">{{$user->subject}}</button>
         <button type="button" class="btn btn-default btn-sm">{{$user->chapter}}</button>
       
        </div>
        </div>
           </div><br>
         <div style="border-bottom:1px solid #e2e2df;"></div>

         @endforeach
     </div>
     
     <div class="col-md-4">
     <h4>ক্লাস অনুযায়ী প্রশ্ন</h4>
     <ul>
     
     <li><a href="http://localhost:8000/category/class6">ষষ্ঠ শ্রেণী </a>* <b> {{$totalans6}}</b></li>
     <li><a href="http://localhost:8000/category/class7">সপ্তম শ্রেণী  </a>* <b> {{$totalans7}}</b></li>
<li><a href="http://localhost:8000/category/class8">অষ্টম শ্রেণী  </a>* <b> {{$totalans8}}</b></li>
<li><a href="http://localhost:8000/category/ssc">মাধ্যমিক </a>* <b> {{$totalans_ssc}}</b></li>
<li><a href="http://localhost:8000/category/hhc1">উচ্চমাধ্যমিক ১ম বর্ষ </a>* <b> {{$totalans_hsc1}}</b></li>
<li><a href="http://localhost:8000/category/hhc2">উচ্চমাধ্যমিক ২য় বর্ষ </a>* <b> {{$totalans_hsc2}}</b></li>
  
     </ul>
     <hr>
      <h4>টিউটোরিয়াল</h4>
     <ul>
       <li><a>চ্যাটে চ্যাটে ইংরেজী শিখুন - মিথুন দাস</a></li>
        <li><a>জেনে নিন পুল আপ দেওয়ার কিছু সহজ উপায় - আআআ</a></li>
       <li><a>নাচের ১২১টি সহজ স্টেপ-Urmee Pal</a></li>
       <li><a>মিষ্টী কথায় মন ভুলানো ফাফর দিতে চান? - সাইফুল ইসলাম সাইফ</a></li>
      
     </ul>
       </div>
</div>
</div>
   <script>
     $(function(){
  $("#header a").click(function(){
    $("#header a").removeClass("selected")
    $(this).addClass("selected")
    return true;
  })
})
  $(".{{$str}}").addClass("active-link");
   </script>
 @section('footer')

      @endsection
        @endsection