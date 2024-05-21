<?php

require "./view/home.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            width: 100%;
            height: 100%;
            display: contents;
        }

        .main_container {
            width: 100%;
            height: 86%;
            background: #c8c3c3;

        }

        .header {
            text-align: center;
            width: 100%;
            background-color: #987979;
            display: flex;
            justify-content: center;
        }

        .content {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            position: relative;
            left: 3em;
        }

        .log_btn {
            width: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile {
            align-items: center;
            width: 10%;
            display: flex;
            justify-content: center;
        }

        .main {
            width: 100%;
            height: 80%;
            display: flex;
            /* justify-content: center; */
            align-items: center;
            background-color: #c8c3c3;
        }

        .content_2 {
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer {
    width: 100%;
    height: 20%;
    background-color: #9f9592;
    display: flex;
    justify-content: center;
    align-items: center;
}
    </style>
</head>

<body>
    
    <div class="main_container">
        <div class="header">
            <div class="content">
                <h1>HOGWARTS UNIVERSITY</h1>
            </div>
            <div class="profile">
                <img src="design.png" alt="">
            </div>
        </div>
        <div class="main">
            <div class="content_2">
                <h1 id="courses">Welcome to our courses</h1>
            </div>
        </div>
        <div class="footer">
                <p>© 2024 courses. All Rights Reserved.</p>
        </div>
    </div>
</body>

</html>