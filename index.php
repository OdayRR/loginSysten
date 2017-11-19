<?php

session_start();

require('connect.php');

?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <link rel="stylesheet" href="styles.css" >
        <style>

                *{
                    padding: 0;
                    margin-top: 100;
                    border: 0; 
                } 
                
                body{ background:#ccccff;
                } 
                
                #container{ 
                    width: 40%;
                    background: white;
                    margin: 0 auto; 
                    padding: 20px; 
                } 

                #chatlogs{ 
                    width: 40%;
                    padding: 5px;
                    background: white;
                    margin: 0 auto; 
                    border-bottom: 1px solid silver; 
                    font-weight: bold; 
                } 
                
                 
                input[type="submit"]{
                    
                    width: 100%; 
                    height: 40px;
                    border: 1px solid grey; 
                    border-radius: 5px; 
                } 
               
                textarea{ 
                    width: 100%;
                    height: 40px; 
                    border: 1px solid grey;
                    border-radius: 5px;
                }




            </style>
            <title>Chat Box</title>

            <script
                src="http://code.jquery.com/jquery-2.2.4.min.js"
                integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
                crossorigin="anonymous">

            </script>

            <script>

                function submitChat() {
                    if (form1.message.value == '') {
                        alert("Enter your message!!!");
                        return;
                    }
 
                    var message = form1.message.value;
                    var xmlhttp = new XMLHttpRequest();

                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
                        }
                    }

                    xmlhttp.open('GET', 'insert.php?message=' + message, true);
                    xmlhttp.send();

                }

                $(document).ready(function (e) {
                    $.ajaxSetup({
                        cache: false
                    });
                    setInterval(function () {
                        $('#chatlogs').load('logs.php');
                    }, 2000);
                });

            </script>


        </head>
        <body>
            <form name="form1" id="container">
               Chat Name: <b> <?php echo $_SESSION['username'];  ?></b> <br /> 
               Message: <br />
                <textarea name="message"></textarea><br />
                <input type="submit" value="Send" onclick="submitChat()"/><br /><br />
                

                <a href="logout.php">Logout</a><br /><br />

            </form>
            <div id="chatlogs">
                LOADING CHATLOG...
            </div>

        </body>