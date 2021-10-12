<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //read to database
        
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);
        if($result)
        {
            if($result && mysqli_num_rows($result) > 0);
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_date['password'] === $password);
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        echo "wrong username or password";
    }
    else{
        echo "Pls Enter Some Invalid Information";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3fd9c2331c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="box" class="container">
        <form action="" method="post">
            <input type="text" name="user_name"><br><br>
            <input type="text" name="password"><br><br>
            <button class="btn btn-primary" type="sumbit">
            <i class="fas fa-sign-in-alt"></i>
            Login
            </button><br><br>
            <a href="signup.php">Not Memeber Yet? Sign up!</a><br><br>
        </form>
    </div>
    
</body>
</html>