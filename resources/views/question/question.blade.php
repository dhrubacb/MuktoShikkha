
<!DOCTYPE html>
<html>
<head>
  <title>Add Ques</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-book"></span> মুক্ত শিক্ষা
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
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> dhruba</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> লগ আউট </a></li>
    </ul>
  </div>
</nav>

  <div class="container">
  <div class="add_ques">

    
        {!! Form::open(array('url' => 'question/store', 'method'=>'POST')) !!}
      
        <meta name="csrf-token" content="{{ csrf_token() }}">
      
        <div class="row">
      <div class="col-sm-8">
      <div class="ques_title">
      <h3>Title</h3>
     
       <div class="title_form">
        <div class="row">
      <div class="col-sm-12">
       <input type="text" class="form-control" name="ques_title" maxlength="80"  placeholder="Title of your question...">
       </div>
       </div>
       </div>
       </div>
       <br><hr>      
       <div class="form-group"">
       <textarea class="form-control" name="ques_detail" rows="7" placeholder="Details about your question..." id="comment"></textarea>
       </div>
  </div>
      </div><br/>
   <br>
   <hr>

      <div class="csc">
      <div class="row">
      <div class="col-md-3">
        <div class="tag_class">
             <h4>Choose Class:<br></h4>
          <select name="class">
  <option value="u-ssc">Class Six- Eight</option>
  <option value="ssc">SSC</option>
  <option value="hhc">HSC</option>
  
  </select>
        </div>
        </div>
        <div class="col-md-3">
              <div class="tag_subject">
          <h4>Choose Subject:<br></h4>
          <select name="subject">
  <option value="*">All</option>
  <option value="phy">Physics</option>
  <option value="chem"> Chemistry</option>
  <option value="mat">Math</option>
  </select>
        </div>
      </div>

  <div class="col-md-3">
                  <div class="tag_chapter">
                <h4>Chapter:<br></h4>
          <select name="chapter">
  <option value="ch1">Chapter 1</option>
  <option value="ch2">Chapter 2</option>
  <option value="ch3">Chapter 3</option>
  </select>
        </div>
      </div>
</div>
</div>
<br><hr>
<br>
 <div class="col-sm-6">
      <div class="tags">
      <h3>Add Tag</h3><h4></h4>
     
       <div class="title_form">
      <input type="text" class="form-control" name="tag" maxlength="80"  placeholder="Add Tags...">
       </div>
     </div>
     <br><br>
      
       <button class="btn btn-success" type="submit">Add Question</button>
      </div>
   
    {!! Form::close() !!}
 
</div>

  </div>
  <br><br><br><br>ddd
  </div>
  
</body>
</html>