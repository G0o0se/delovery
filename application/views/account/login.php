<div class="account-block">
    <div class="link-login-panel">
        <a class="link-item-login active" href="">Вхід</a>
        <a class="link-item-login" href="registration">Реєстрація</a>
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
                    Електронна адреса
                    <input name="email" class="input-form" placeholder="Введіть електронну адресу" type="email" />
                </label>
            </div>
            <div class="input-block">
                <label>
                    Пароль
                    <input name="password" class="input-form" placeholder="********" type="password" />
                </label>
            </div>
            <div class="accept-btn">
                <button name="submit" type="submit" class="btn-send">Вхід</button>
            </div>
        </form>
    </div>
</div>
