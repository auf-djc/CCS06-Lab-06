<?php

if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>Your Profile</h1>";
    echo "Full name: " . $_POST['complete_name'];
    echo "<hr />";
    // Debug
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
else:
?>

<h1>Profile Form</h1>
<form method="POST" action="ProfileForm.php">
Name: <input type="text" name="complete_name" /><br />
Birthdate: <input type="date" name="birthdate" /><br />
Email Address: <input type="email" name="email" /><br />
Program:
<select name="program">
<option value="BSCS">Bachelor of Science in Computer Science</option>
<option value="BSIT">Bachelor of Science in Information Technology</option>
<option value="BMMA">Bachelor of Multimedia Arts</option>
<option value="BSIS">Bachelor of Science in Information Systems</option>
</select>
<br />
Favorite Color: <input type="color" name="favorite_color" /><br />
<div style="display:flex;align-items:center;">
        Superpower level (0 to 10):&nbsp;
        <input type="range" name="superpower_level" min="0" max="10" step="1">
    </div>
    <br />
<button>Submit</button>
</form>

<?php
endif;
?>

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

            /* Form */
            form {
                max-width: 600px;
                margin: 0 auto;
                padding: 30px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
            }

            /* Form Input Fields */
            input[type="text"],
            input[type="email"],
            input[type="date"],
            select,
            input[type="range"] {
                font-size: 16px;
                width: 100%;
                padding: 10px;
                margin-bottom: 35px;
                border: none;
                border-radius: 5px;
                box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.1);
                <input type="color" name="favorite_color" id="color-picker" />
                <label for="color-picker">Favorite Color:</label>
                <div id="color-preview"></div>

            }

            /* Form Button */
            button {
                background-color: #008000;
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                cursor: pointer;
            }

            button:hover {
                background-color: #006600;
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
</html>