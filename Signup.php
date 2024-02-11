<?php
session_start();

    include("connection.php");
    include("functionscus.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            $user_id = random_num(10);
            $query = "insert into Users (cusid,cusname,cuspass,cusemail) values ('$user_id','$user_name','$password','$email')";

            mysqli_query($con, $query);
            header("Location: LoginPagecus.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background: url(./assets/img/BG01.jpg) no-repeat center; background-size: cover; height: 100%; background-attachment: fixed;
}
.background{
    width: 500px;
    height: 600px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}

form{
    height: 600px;
    width: 500px;
    background-color: rgba(0,0,0,0.7);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(0,0,0,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding:  10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
p{
    text-align: center;
    padding-top: 20px;
}

    </style>
</head>
<body>
    <div class="background">
    </div>
    <form method="Post">
        <h3>Insert Your Details</h3>
<br>
       
        <input type="text" name="user_name"  placeholder="Your Name" id="name" >

       
        <input type="email" name="email" placeholder="Email" id="email">

     
        <input type="password" name="password" placeholder="Password" id="password">

       
        <input type="password" placeholder="Confirm Password" id="cpassword">


        <button type="submit" name="save" value="send">Sign Up</button>


        <p>Already Have a Account? <a href="Loginpagecus.php">Log in</a> </p>


    </form>
</body>
</html>