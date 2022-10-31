<?php
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"online_notice_board");
$name = "";
$email = "";
$password = "";

$query ="select * from admins where 'email' = '$_SESSION[email]'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
  $id = $row['id'];
  $name = $row['name'];
  $email = $row['email'];
  $password = $row['password'];

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
            <label> Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name;?>"></br>
</div>  
     <br><div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email;?>"></br>
</div>
        <br><div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" value="<?php echo $password;?>"></br>
</div>
     
</select></br>

      
      <br><button type="submit" name="update_profile" class="btn btn-primary">Update</button></br>
      
      
      
</form>
</body>
</html>