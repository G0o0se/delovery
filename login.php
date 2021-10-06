<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <title>Login</title>
</head>

<body>

<?php include 'header.php'?>

<div class="content-block">
    <div class="link-login-panel">
        <a class="link-item-login" href="">Login</a>
        <a class="link-item-login active" href="">register</a>
    </div>
    <div class="active-phone">
        <h3>Please, confirm your phone number to complete registration</h3>
    </div>
    <div class="form-auth">
        <form action="">
            <div class="input-block">
                <label>
                    email
                    <input class="input-form" placeholder="Enter your first name" type="email" />
                </label>
            </div>
            <div class="input-block">
                <label>
                    password
                    <input class="input-form" placeholder="********" type="password" />
                </label>
            </div>
            <div class="accept-btn">
                <button class="btn-send">login</button>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'?>

</body>

</html>