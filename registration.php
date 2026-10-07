<?php 
$conn=mysqli_connect("localhost","root","","user_db");
if(isset($_POST['submit']))
{
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];

    $query=mysqli_query($conn,"insert into user (user_username,user_email,user_password) values ('$user_username','$user_email','$user_password')");
    if($query)
    {
        echo "Inserted Successfully";
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
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form action="" method="POST">
        <h2>Create Account</h2>

        <input type="text" id="user_username" name="user_username" placeholder="Full Name" required>

        <input type="email" id="user_email" name="user_email" placeholder="Email Address" required>

        <input type="password" id="user_password" name="user_password" placeholder="Password" required>

        <button type="submit" value="Register" name="submit">Register</button>

        <p>Already have an account?
            <a href="login.php">Login</a>
        </p>
    </form>
</div>

<script src="script.js"></script>
</body>
</html>