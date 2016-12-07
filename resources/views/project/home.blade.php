@extends('Blade_code.Header_footer')
 @section('top_header')

@section('lower_header')


    <div class="container">
      <div class="row" style="margin-top:50px;margin-bottom:40px;">
      <div>
        <div class="col-md-2" style="margin-top:-19px;">
          <img src="/Image/Capture.PNG" height="91" width="128" style="float: right;">
           
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <br>
          <div style="display:inline; float:right;" class="home_button">
            <button type="button" onclick="location.href='question/create'" style="background-color:#3d7fb8;" class="btn btn-info">প্রশ্ন করুন</button>
               <button type="button" onclick="location.href='create/exam'" class="btn btn-default">পরীক্ষা দিন</button>
             <button type="button" class="btn btn-default">ব্লগ লিখুন</button>
              <button type="button" class="btn btn-default">বই পড়ূন</button>
                <button type="button" class="btn btn-default">আর্টিকেল</button>
          </div>
        </div>
          </div>
        </div>
        <hr>
        
         <div class="row">
        <div class="col-md-8" style="background:#f7f8f0;padding-left:30px;">
         <?php
         $i=0;
         ?>
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
        <div style="border:1.5px solid #73AFB6;color:#337AB7;padding:1px 60px 1px 10px;margin-top:10px;width: 70px;">
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
        <div style="padding-left: 14px; padding-bottom:5px;">{{$output}}টি</div><div style="padding-left: 10px;"> উত্তর</div> </h5>
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
         <?php
         $i++;
         if($i==30)
          break;
         ?>

         @endforeach
     </div>
     <div class="col-md-4">
     <div class="row">
     <div class="col-md-12" style="background-color:#fdf9e8;margin-left:5px;padding:10px 0px 60px 5px;">
     <h4>নতুন ব্লগসমূহ</h4>
     <ul>
       <li><a>ব্লগ ১ - ইউজার</a></li>
       <li><a>স্ট্যাটিক রাউটিং </a></li>
       <li><a>ব্লগ ১ - ইউজার</a></li>
       <li><a>ব্লগ ১ - ইউজার</a></li>
       <li><a>ব্লগ ১ - ইউজার</a></li>
     </ul>
     <hr>
      <h4>টিউটোরিয়াল</h4>
     <ul>
       <li><a>চ্যাটে চ্যাটে ইংরেজী শিখুন - মিথুন দাস</a></li>
        <li><a>জেনে নিন পুল আপ দেওয়ার কিছু সহজ উপায় - আআআ</a></li>
       <li><a>নাচের ১২১টি সহজ স্টেপ-Urmee Pal</a></li>
       <li><a>মিষ্টী কথায় মন ভুলানো ফাফর(ছোবল) দিতে চান? - বিষাক্ত নাগিন</a></li>
      
     </ul>
     </div>
     </div>
</div>
</div>
      </div>
      @section('footer')

      @endsection
        @endsection
          @endsection