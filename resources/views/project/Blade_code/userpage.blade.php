<!--
{{URL::asset('')}}
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Galleriya Website template | Home :: w3layouts</title>
<meta name="keywords" content="galleriya Iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{URL::asset('mithun_css/style.css')}}" rel="stylesheet" type="text/css"  media="all" />
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="{{URL::asset('jquery-1.12.4.min.js')}}"></script>
</head>
<body>
<div class="wrap">
	<div class="header">
    	<div class="logo"><a href="index.html"><img src="{{asset( $picture )}}" title="Blogging Site" alt="Blogging" /></a></div>
        <div class="nav">
            <ul>
              <li><a href="userhome">Home</a></li>
              <li><a href="userabout">About</a></li>
              <li><a href="#">Works </a></li>
              <li><a href="usercontact">Catch me</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>

    @yield('header')

    <div class="sidebar">
      <h2>Recent Ideas </h2>
        <ul>
                <li><a href="#">নতুন বার্তা</a></li>
                <li><a href="#">এ পর্যন্ত আপনার মোট ব্লগের সংখ্যা</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
        </ul>
      <h2>Recent Updates</h2>
        <ul>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
                <li><a href="#">Lorem ipsum dolor sit consectetur adip</a></li>
        </ul>
    </div>

    
    @yield('sidebar')


    <div class="footer">
    <div class="wrap">
        <div class="fmenu">
            <ul>
              <li><a href="userhome">Home </a></li>
              <li><a href="userabout">About</a></li>
              <li><a href="#">Works </a></li>
              <li><a href="usercontact">Catch me</a></li>
            </ul>
    </div>
        <div class="copy">Design by <a href="http://w3layouts.com">W3Layouts</a></div>


</div>
</body>
</html>


 @yield('footer')
