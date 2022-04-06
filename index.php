<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Management System</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        #side_bar{
            background-color: slateblue;
            padding:50px;
            width:300px;
            height: 450px;

        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Library management system(LMS)</a>
        </div>
        <ul class ="nav navbar-nav navbar-right">
            <li class ="nav-item">
                <a class="nav-link" href="index.php">Admin login
                </a>
            </li>
            <li class ="nav-item">
                <a class="nav-link" href="index.php">User Login
                </a>
            </li>
            <li class ="nav-item">
                <a class="nav-link" href="signup.php">Register
                </a>
            </li>
        </ul>
    </div>
</nav><br>
<span><marquee>This is Library mangement System,created by (Emon,Raiful,Shamim)</marquee></span><br>
<div class="row">
    <div class="col-md-4" id="side_bar">
        <h5>Library Timing</h5>
        <ul>
            <li> 24 hour open</li>

        </ul>
        <h5> Our facilities-</h5>
        <ul>
            <li> Free Wifi</li>
            <li> Usable computers</li>
            <li> News paper</li>
            <li> Discussion Room</li>
        </ul>

    </div>
    <div  class="col-md-8"  id="main_content">
        <center>
            <h3>
                User Login Form
            </h3>
        </center>
        <form action="" method="post">

            <div class="form-group">
                <label for="Name">Email:</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Name">Password:</label>
                <input type="text" name="password" class="form-control" required>
            </div>


            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
        <?php
        if(isset($_POST['login'])){
            $connection = mysqli_connect("localhost","root");
            $db=mysqli_select_db($connection,"lms");
           {


        }
        ?>

    </div>
</div>

</body>
</html>