<?php 
session_start();
if(isset($_SESSION['user_id']))
{
  header("Location:index.php");
}
$conn=mysqli_connect("localhost","root","","user_db");
if(isset($_POST['login']))
{
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];

    $query=mysqli_query($conn,"select * from user where user_email='$user_email' and user_password='$user_password'");
    if(mysqli_num_rows($query)>0)
    {
      $row=mysqli_fetch_array($query);
      $_SESSION['user_id']=$row['user_id'];
      $_SESSION['user_username']=$row['user_username'];
      header("Location:index.php");
    }
    else
    {
        echo "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form action="" method="POST">
        <h2>Login Form</h2>

        <input type="email" id="user_email" name="user_email" placeholder="Email Address" required>

        <input type="password" id="user_password" name="user_password" placeholder="Password" required>

        <button type="submit" value="Login" name="login">Login</button>

    </form>
</div>

<script src="script.js"></script>
</body>
</html>