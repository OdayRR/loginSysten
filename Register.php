<?php
session_start();
require('connect.php');

if (isset($_POST) & !empty($_POST)) {

    $username = $_POST['username'];
    $Email = $_POST['Email'];
    $password = $_POST['password'];

    $Sql = "INSERT INTO `oday` (username , Email ,password)value('$username' , '$Email' ,'$password')";
    echo $Sql;
    $result = mysqli_query($C, $Sql) or die (mysqli_error($C));
    
    if($result){
        
    echo" registration complete ";
        
        
    }else {
        
        echo"registration faild";
        
    }
    }
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> PHP register System </title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <link rel="stylesheet" href="styles.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>

            body{
                padding-top:40px;
                padding-bottom: 40px;
                background-color: #eee;
            }

            .signin {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
            }
            .signin .signin-heading,
            .signin .checkbox {
                margin-bottom: 10px;
            }
            .signin .checkbox {
                font-weight: normal;
            }
            .signin .form-control {
                position: relative;
                height: auto;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 10px;
                font-size: 16px;
            }
            .signin .form-control:focus {
                z-index: 2;
            }
            .signin input[type="email"] {
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            .signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }




        </style>
    </head>
    <body>
    <center>
        <form class="signin" method="POST" autocomplete="off">

            <h3 class="signin-heading"> Please Register </h3>

            <div class="input">

                <input type="text" name="username" class="form-control" placeholder="Username" required>      
            </div>
            <label for="inputEmail" class="sr-only">Email</label>

            <input type="Email" name="Email" id="inputEmail" class="form-control" placeholder="Enter Email" required>
            <label for="inputPassword" class="sr-only">Password</label>

            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <button class="primary" type="submit">Register</button>
            <a class="primary" href="Login.php">Login</a>

        </form>
    </center>
</body>
</html>

