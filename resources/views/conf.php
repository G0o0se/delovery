<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
    <title>Confirmation</title>
</head>

<body>

<?php include 'header.php' ?>

<div class="content-block">
    <div class="link-login-panel">
        <a class="link-item-login" href="">Login</a>
        <a class="link-item-login active" href="">register</a>
    </div>
    <div class="active-phone">
        <h3>Please, confirm your phone number to complete registration</h3>
    </div>
    <div class="form-auth">
        <div class="code-check">
            <div class="code">
                <div class="input-block">
                    <label>code
                        <input class="input-form" id="code" placeholder="Enter code" type="text"/>
                    </label>
                </div>
            </div>
            <div class="btn-code-check">
                <button class="btn-code">check</button>
            </div>
        </div>
        <div class="input-block">
            <label>
                password
                <input class="input-form" placeholder="********" type="password"/>
            </label>
        </div>
        <div class="accept-btn">
            <button class="btn-send">register</button>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>

</body>
</html>




