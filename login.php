<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: #4CAF50;
}

      </style>
</head>
<body>
<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="login.php">SignUp</a></li>
  <li><a href="about.html">About</a></li>
</ul>

    <div class="container">
    <br><h1 class="text-center text-sucess">Welcome to Quiz World</h1><br>
        <div class="row">
            <div class="col-lg-6">
            <div class="card">
            <h2 class="text-center card-header">Login form</h2> 
                <form action="validation.php" method="post">
                    <div class="form-group">
                         <label>Username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                </div>
            </div>

            <div class="col-lg-6">
            <div class="card">
            <h2 class="text-center card-header">SignUp form</h2> 
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">SignUp</button>
                </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>