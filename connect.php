<?php

$C = mysqli_connect('localhost', 'root', '','Login');

if (!$C){
    die("Database Connection Failed" . mysqli_error($C));
}

$selectDB = mysqli_select_db($C, 'Login');

if (!$selectDB){
    die("Database Selection Failed" . mysqli_error($C));
}

