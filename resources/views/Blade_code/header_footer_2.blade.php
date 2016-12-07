<!DOCTYPEHTML>
<html>
<head>
<meta charset="UTF-8">
<title> মুক্ত শিক্ষা </title>
<link rel="icon" href="favicon.ico"/>
<link rel="stylesheet" type="text/css" href="mystyle.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
{!! Html::style('css/mukto-style.css') !!}
{!! Html::script('js/mukto-script.js') !!}

</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost:8000/home" style="font-weight:bold;color:white; font:/Fonts/BongshaiMJ-BoldItalic;"><p style="color:#fff;display:inline"> মুক্ত</p> <p style="color:#78b1f6 ;display:inline">শিক্ষা</p>
</a>
    </div>

    <ul class="nav navbar-nav">
     <li><a href="#"><span class="glyphicon glyphicon-ask"></span> সহয়িকা</a></li> 
     <form class="navbar-form navbar-left" role="search" style="display:inline;">

     <li style="display:inline;"> <input type="text" class="form-control" placeholder="খুঁজুন"> <button type="button" class="btn  btn-sm" style="color:#555 !important;"><span class="glyphicon glyphicon-search"></span></button></li>
         
         </form>
         <span class="icon-bar"></span>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="notification"><span class="glyphicon glyphicon-globe"></span> </a></li>
      <li><div class="dropdown">
  <button class="btn  dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="font-size:14px;color:#aaa;background:#222;margin-top:7px;">
    Dhruba
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="min-width:30px;background:#ffe;">
    <li><a href="#">Profile</a></li>
    <li><a href="#">Activity</a></li>
     <li role="separator" class="divider"></li>
    <li><a href="#">Sign out</a></li>
  </ul>
</div></li>
    </ul>
  </div>
</nav>
@yield('top_header')





<br><br>
     <div id="footer" class="categories">
     <div class="container">
        <div class="footerwrap">            
           
              
              <div class="row">
                  <div class="col-md-4">
                
            <h4>
               মুক্তশিক্ষা প্রজেক্ট
             </h4>  
             <ul>
                        <li> <a href="#" title="professional and enthusiast programmers">প্রজেক্ট বিবরণ</a></li>
                        <li> <a href="#" title="system and network administrators">আমাদের সম্পর্কে </a></li>
                        <li> <a href="#" title="computer enthusiasts and power users">প্রাইভেসি </a></li>
                        <li> <a href="#" title="power users of web applications">ক্ষেত্র ও শর্তস্মূহ</a> </li>
                         
                </ul>
                </div>

            <div class="col-md-4">
            <h4>
               সহয়িকা
             </h4>  
             <ul style="margin-left: 112px;">
                       <li><a href="#" title="science fiction and fantasy enthusiasts">কোথায় কি</a></li>
                        <li><a href="#">লগ ইন সমস্যা</a></li>
                       <li><a href="#">র‍্যাঙ্কিং নিয়মাবলী</a></li>
                        <li><a href="#" title="professional and amateur chefs">পোস্ট করতে সমস্যা</a></li>
                        <li><a href="#" title="contractors and serious DIYers">হেল্প ইউনিট </a></li>
                         
                </ul>
                </div>

            <div class="col-md-4">
            <h4>
                ফিডব্যাক দিন
             </h4>  
             <ul>
                        <li><a href="#">যোগাযোগ করুন</a></li>
                        <li><a href="#">শেয়ার করুন</a></li>
                        <li><a href="#" title="scientific skepticism">আমাদের জানান</a></li>
                        <li><a href="#">রিভিউ দিন</a></li>
                         
                </ul>
                </div>
              </div>
              </div>
             
          

            </div>
          
            
            <div id="copyright" style="text-align:center; color:#fff;padding-top:60px;padding-bottom:30px;">
                © 2016 মুক্তশিক্ষা
            </div>
           
               
    
   </div>
<script type="text/javascript">
 
$('#cssmenu').prepend('<div id="indicatorContainer"><div id="pIndicator"><div id="cIndicator"></div></div></div>');
var activeElement = $('#cssmenu>ul>li:first');

$('#cssmenu>ul>li').each(function() {
  if ($(this).hasClass('active')) {
    activeElement = $(this);
  }
});

var posLeft = activeElement.position().left;
var elementWidth = activeElement.width();
posLeft = posLeft + elementWidth/2 -6;
if (activeElement.hasClass('has-sub')) {
  posLeft -= 6;
}

$('#cssmenu #pIndicator').css('left', posLeft);
var element, leftPos, indicator = $('#cssmenu pIndicator');
  
$("#cssmenu>ul>li").hover(function() {
  element = $(this);
  var w = element.width();
  if ($(this).hasClass('has-sub')) {
    leftPos = element.position().left + w/2 - 12;
  } else {
    leftPos = element.position().left + w/2 - 6;
  }
  $('#cssmenu #pIndicator').css('left', leftPos);
}, function() {
  $('#cssmenu #pIndicator').css('left', posLeft);
});

$('#cssmenu>ul').prepend('<li id="menu-button"><a>Menu</a></li>');
$( "#menu-button" ).click(function(){
  if ($(this).parent().hasClass('open')) {
    $(this).parent().removeClass('open');
  }
  else {
    $(this).parent().addClass('open');
  }
});

</script>

</body>

</html>

@yield('footer')