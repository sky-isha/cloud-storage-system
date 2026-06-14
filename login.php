<?php
include "db.php";

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $user = mysqli_fetch_assoc($result);

        if(password_verify($password, $user['password']))
        {
            echo "Login Successful!";
        }
        else
        {
            echo "Wrong Password!";
        }
    }
    else
    {
        echo "User Not Found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>


</head>
<body>

<h2>User Login</h2>

<form method="POST">
    <input type="email" name="email" placeholder="Enter Email" required><br><br>

    <input type="password" name="password" placeholder="Enter Password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>

</body>
</html>