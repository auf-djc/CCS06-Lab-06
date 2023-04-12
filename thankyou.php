<!doctype html>
<html>
    <head>
        <style>
            /* Body */
            body {
                background-color: #f2f2f2;
                font-family: 'San Francisco', sans-serif;
            }

            /* Header */
            h1 {
                text-align: center;
                margin-top: 50px;
                color: #444;
            }

            /* Output Section */
            .output {
                max-width: 600px;
                margin: 0 auto;
                padding: 30px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
            }

            .output p {
                margin-bottom: 20px;
            }

            /* Debug Section */
            pre {
                margin-top: 20px;
                padding: 10px;
                background-color: #f2f2f2;
                border-radius: 5px;
                border: 1px solid #ccc;
            }
        </style>
    </head>
    <body>
        <div class="output">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $complete_name = $_POST["complete_name"];
                $email = $_POST["email"];
                $type = $_POST["type"];
                $satisfaction_level = $_POST["satisfaction_level"];
                $message = $_POST["message"];

                echo "<h1>Thank You!</h1>";
                echo "<p>Received " . $type . " message from " . $complete_name . " (" . $email . ")</p>";
                echo "<p>Message: " . $message . "</p>";
                echo "<p>Satisfaction Level: " . $satisfaction_level . "</p>";
            }
            ?>
        </div>
    </body>
</html>
