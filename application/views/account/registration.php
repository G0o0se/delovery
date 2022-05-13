<div class="account-block">
    <div class="link-login-panel">
        <a class="link-item-login" href="login">Вхід</a>
        <a class="link-item-login active" href="">Реєстрація</a>
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
                    Ім'я та прізвище
                    <input class="input-form" name="name" placeholder="Введіть своє ім’я та прізвище" type="text"/>
                </label>
            </div>
            <div class="input-block">
                <label>
                    Електронна адреса
                    <input class="input-form" name="email" placeholder="Введіть електронну адресу" type="email"/>
                </label>
            </div>
            <div class="input-block">
                <label>
                    Пароль
                    <input class="input-form" name="password" placeholder="***********" type="password"/>
                </label>
            </div>
            <div class="input-block">
                <label>
                    Пароль
                    <input class="input-form" name="accpassword" placeholder="***********" type="password"/>
                </label>
            </div>
            <div class="accept-btn">
                <button type="submit" name="submit" class="btn-send">Реєстрація</button>
            </div>
        </div>
    </form>
</div>