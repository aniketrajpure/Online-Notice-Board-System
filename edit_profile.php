<?php
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"online_notice_board");
$fname = "";
$lname = "";
$email = "";
$password = "";
$class = "";
$query ="select * from users where 'email' = '$_SESSION[email]'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
  $fname = $row['fname'];
  $lname = $row['lname'];
  $email = $row['email'];
  $password = $row['password'];
  $class = $row['class'];
}

?>
<!DOCTYPE html>
    <html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title></title>
</head>
<body>
    <form action="" method="post">
      <br>  <div class="form-group">
            <label>First Name:</label>
            <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>"></br>
</div>
      <br> <div class="form-group">
            <label>Last Name:</label>
            <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>"></br>
</div>
     <br><div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email;?>"></br>
</div>
        <br><div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" value="<?php echo $password;?>"></br>
</div>
      <br><div class="form-group">
            <label>Class:</label>
            <select class="form-control" name="class" required>
            <option><?php echo $class;?></option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
</select></br>
</div>
      
      <br><button class="btn btn-primary"type="submit" name=update_profile>Update</button></br>
      
</form>
</body>
</html>