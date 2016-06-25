<!DOCTYPE html>
<html>
<head>
  <meta name="viewport"  content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
  <h2 style="margin-top: 20px; margin-bottom: 50px; text-align: center;text-shadow: 2px 2px 4px grey">Login as Admin</h2>
  <div class="row">
  <div class="col-md-4 ">

  
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>
@endif   

<form   method="POST" action="dologin">
    {!! csrf_field() !!}

    <div class="form-group">
      <label for="email">Email:</label>
      <input name = "email" type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input name = "password" type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>


    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
    
  </div>
</div>

</body> 
</html>
