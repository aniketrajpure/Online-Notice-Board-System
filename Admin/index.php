<?php
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"online_notice_board");

if(isset($_POST['login'])){
  $query ="select * from admin where email = '$_POST[email]' AND password = '$_POST[password]'";
  $query_run = mysqli_query($connection,$query);
  if(mysqli_num_rows($query_run)){
    $_SESSION['email']= $_POST['email'];
    while($row = mysqli_fetch_assoc($query_run)){
        echo "<script>
    window.location.href = 'admin_dashboard.php'; 
    </script>";
    }
  }
  else{
    echo "<script>alert('Please Enter Correct email id and password');
    window.location.href = 'Admin\index.php';
    </script>";
  }

} 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Notice Board System!</title>
    <!-- css file-->
    <link rel= "stylesheet" href= "../css/style.css">
</head>
<body bgcolor="skyblue">
       <!--Header section code start here-->
       <div class="row" id="header">
        <div class="col-md-4">
  </div>
       <div class="col-md-4">
        <h2><?php echo 'Online Notice Board System';?></h2>
</div>
<div class="col-md-4">
</div>
</div>
        <!-- Admin login form start here-->
       <center> <section id="Admin login_form">
            <div class="row">
                <div class="col-md-4 m-auto block">
                   <h2> Admin Login form</h2>
                   <form action="index.php"method="post">
                <div class="form-group">
                   <br> <lable>email:</lable></br>
                    <input class="form-control" type="text" name="email" placeholder="Enter your email">
                <div class="form-group">
                    <lable>Password:</lable>
                 <br><input class="form-control" type="text" name="password" placeholder="Enter your Password"></br>
                    <br><button class="btn btn-primary"type="submit" name="login">Login</button></br>
</form>
<br> <a href="admin_register.php">Click here to register</a></br></center>
</div>
</div>
</section>
</div>
</body>
</html>