<div class="account-block">
    <div class="link-login-panel">
        <a class="link-item-login active" href="">Login</a>
        <a class="link-item-login" href="registration">register</a>
    </div>
    <?php if(isset($err)){ ?>
    <div class="error">
        <?php echo $err; ?>
    </div>
    <?php } ?>
    <div class="form-auth">
        <form action="login" method="post">
            <div class="input-block">
                <label>
                    email
                    <input name="email" class="input-form" placeholder="Enter your email name" type="email" />
                </label>
            </div>
            <div class="input-block">
                <label>
                    password
                    <input name="password" class="input-form" placeholder="********" type="password" />
                </label>
            </div>
            <div class="accept-btn">
                <button name="submit" type="submit" class="btn-send">login</button>
            </div>
        </form>
    </div>
</div>
