@extends('Blade_code.header_footer_2')

@section('top_header')
<!--Content-->


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
          <h4 style="padding-bottom:10px; margin-top:20px;">সাম্প্রতিক পরীক্ষাসমূহ</h4>
        </div>
         
      </div>     
  
       <br>

            <div class="row">
        <div class="col-md-8" style="background:#f7f8f0;">
         @foreach($exams as $exam)
         <div class="row">
        <div class="col-md-2">
          <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        
      
          
        <div style="background-color:#73AFB6;color:#fff;padding:1px 60px 1px 10px;margin-top:10px;">
        <h5>
        <div style="padding-left: 14px; padding-bottom:5px;">৫ বার</div><div style="padding-left: 10px;"> দেওয়া</div> <h5>
        </div>

        </div>
        </div>
        </div>
       
        <div class="col-md-6" style=" margin-left:30px;">
        <div>
         <h4><strong><a href="{{ route('quizques',['id' => $exam->id ]) }}" style="text-decoration:none;line-height:50%;"> {{$exam->exam_title}}</a></strong></h4>
         
         <button type="button" class="btn btn-default btn-sm">{{$exam->class}}</button>
         <button type="button" class="btn btn-default btn-sm">{{$exam->subject}}</button>
         <button type="button" class="btn btn-default btn-sm">{{$exam->chapter}}</button>
       
        </div>
        </div>
           </div><br>
         <div style="border-bottom:1px solid #e2e2df;"></div>

         @endforeach
     </div>
  
       </div>
</div>

   
 @section('footer')

      @endsection
        @endsection