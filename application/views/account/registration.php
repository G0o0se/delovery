<div class="account-block">
    <div class="link-login-panel">
        <a class="link-item-login" href="login">login</a>
        <a class="link-item-login active" href="">register</a>
    </div>
    <?php if(isset($err)){ ?>
        <div class="error">
            <?php echo $err; ?>
        </div>
    <?php } ?>
    <form action="registration" method="post">
        <div class="form-auth">
           <div class="input-block">
                <label>
                    Name
                    <input class="input-form" name="name" placeholder="Enter your first and second name" type="text"/>
                </label>
            </div>
            <div class="input-block">
                <label>
                    Email
                    <input class="input-form" name="email" placeholder="Enter your Email" type="email"/>
                </label>
            </div>
            <div class="input-block">
                <label>
                    Password
                    <input class="input-form" name="password" placeholder="***********" type="password"/>
                </label>
            </div>
            <div class="input-block">
                <label>
                    Accept password
                    <input class="input-form" name="accpassword" placeholder="***********" type="password"/>
                </label>
            </div>
            <div class="accept-btn">
                <button type="submit" name="submit" class="btn-send">Registration</button>
            </div>
        </div>
    </form>
</div>