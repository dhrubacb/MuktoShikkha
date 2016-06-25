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
  
  <div class="container">
  <div class="main_items">
    <div class="question">
      <div class="ques_title">
        <h3>{{ $users->ques_title }}</h3>
      </div>
             <hr>
      <div class="ques_detail">
      <p>{{ $users->ques_detail }}</p>

      </div>
      <h4>Asked by <a href="#">Dhr</a></h4>
      <hr>
      <div style="border:solid black 1px; background-color: #ffffe2 "><h5>Result of the Question - 'n' Answers </h5></div>
      <br><br>

      <div class="answer">
      <hr>
      <div class="row">
      <div class="col-md-1">
      <a href="#">Kutti</a>
      </div>
      
      <div class="col-md-9">
      <p>Answer:  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      </div>

      </div>

      <div class="answer">
      <hr>
      <div class="row">
      <div class="col-md-1">
      <a href="#">Muti</a>
      </div>
      
      <div class="col-md-9">
      <p>Answer:  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      </div>
      

      </div>
<hr>
      <div class="response_form">

      <div style="border:solid black 1px; background-color: #ffffe2 "><h5>You can add your answer here... </h5></div>
      <br>
      
      <form action="submit">
       <textarea class="form-control" name="answer" rows="7" id="answer"></textarea>
        <br>
        <button type="button" class="btn btn-default" >Add Answer</button> 
       </form>

      </div>

  </div>
</div>
</div>


</body>
</html>