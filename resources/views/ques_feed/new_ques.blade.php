<!DOCTYPEHTML>
<html>
<head>
<meta charset="UTF-8">
<title> মুক্ত শিক্ষা </title>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="mystyle.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-book"></span> নীড়
</a>
    </div>
    <ul class="nav navbar-nav">
     <li><a href="#"><span class="glyphicon glyphicon-ask"></span> সহয়িকা</a></li> 
     <form class="navbar-form navbar-left" role="search">

      <li> <input type="text" class="form-control" placeholder="খুঁজুন"> </li> 
      </form>
      
   <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
         <span class="icon-bar"></span>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> নিবন্ধন করুন</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> লগ ইন </a></li>
    </ul>
  </div>
</nav>

<!--Content-->
<div class="container">
  <div class="ques_content">
    <div class="content_header">
      <div class="row">
        <div class="col-md-4">
          <h4 style="padding-bottom:10px; margin-top:20px;border-bottom: solid #E4E6E8 1px;">All Question</h4>
        </div>
      </div>     
    </div>
      

    <div class="content_middle">
     @foreach($users10 as $user)

      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">

            <a href = "{{ route('a2q',['id' => $user->ques_id ]) }}"><h4 style="color:#3FAFD5;">{{ $user->ques_title }}</h4></a>
            <h5>{{ $user->ques_detail }}</h5>
        </div>
      </div>
       @endforeach
    </div>
  </div>
</div>
</body>
</html>