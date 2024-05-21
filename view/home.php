<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
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

        button#log {
            width: 35%;
            height: 35%;
            border-radius: 9px;
            border: none;
            background-color: #FFC107;
        }

        .footer {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            background-color: #c8c3c3;
        }

        .footer_content {
            height: 15em;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .button {
            width: 100%;
            height: 5em;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button#regi {
            width: 11%;
            height: 50%;
            background-color: #FFC107;
            border: none;
            border-radius: 10px;
        }
        
        a {
         text-decoration: none;
         color: black;
        }
    </style>
</head>

<body>
    <div class="main_container">
        <div class="header">
            <div class="content">
                <h1>HOGWARTS UNIVERSITY</h1>
            </div>
            <div class="log_btn">
               <button onclick="window.location.href='./view/login.php'" id="log">Login</button>
            </div>
        </div>
        <div class="footer">
            <div class="footer_content">
                <p>Dear learns summer courses registration are open now. Please enrol if not already.</p>
            </div>
            <div class="button">
                <button onclick="window.location.href='./view/register.php'" id="regi">Register Now</butto>
            </div>
        </div>
    </div>
</body>

</html>