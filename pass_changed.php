<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logom 2.png" />
    <link rel="stylesheet" href="style/css_pass_changed.css">
    <title>Forgot Password</title>
 
</head>
<body>
    <div class="container-fluid full-height">
        <div class="row" style="text-align: center">
            <a class="align-self-center mt-sm-5 mb-sm-3" href="index.html">
                <img src="img/logo 2.png" alt="" style="height: 5rem" />
            </a>

<?php
$psw = $_POST["psw"];
$newpsw = $_POST["newpsw"];

if ($psw == $newpsw) {
    echo '<div class="container">
        <h1>Password Changed</h1>
        <hr>
        <p>You have submitted a password change request</p>
        <p>Back? <a href="login.html">Click here</a>.</p>
    </div>';
} else {
    echo '<div class="container">
    <h1>Passwords are not the same</h1>
    <hr>
    <p>Your passwords did not match</p>
    <p>Please enter the same password again</p>
    <p>Return to previous page <a href="reset_pass.html">Click here</a>.</p>
    </div>';
}
?>
        </div>
    </div>
</body>
</html>
