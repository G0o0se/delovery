<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
    <title>Register</title>
</head>

<body>

<?php include 'header.php'; ?>

<div class="content-block">
    <div class="link-login-panel">
        <a class="link-item-login" href="">login</a>
        <a class="link-item-login active" href="">register</a>
    </div>
    <div class="active-phone">
        <h3>Please, confirm your phone number to complete registration</h3>
    </div>
    <div class="form-auth">
        <div class="input-block">
            <label>
                first name
                <input class="input-form" placeholder="Enter your first name" type="text"/>
            </label>
        </div>
        <div class="input-block">
            <label>
                Last name
                <input class="input-form" placeholder="Enter your last name" type="text"/>
            </label>
        </div>
        <div class="input-block">
            <label>
                Email
                <input class="input-form" placeholder="Enter your Email" type="email"/>
            </label>
        </div>
        <div class="input-block">
            <label>
                phone number
                <input class="input-form" placeholder="+3 (- - -) - - - - - - - - -" type="text"/>
            </label>
        </div>
        <div class="accept-btn">
            <button class="btn-send">next step</button>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>

</body>
</html>