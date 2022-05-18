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
                    Ім'я
                    <input class="input-form" name="fname" placeholder="Введіть своє ім’я" required type="text"/>
                </label>
            </div>
            <div class="input-block">
                <label>
                    Прізвище
                    <input class="input-form" name="lname" placeholder="Введіть своє прізвище" required type="text"/>
                </label>
            </div>
            <div class="input-block">
                <label>
                    Електронна адреса
                    <input class="input-form" name="email" placeholder="Введіть електронну адресу" required type="email"/>
                </label>
            </div>
            <div class="input-block">
                <label>
                    Номер телефону
                    <input class="input-form" name="number" placeholder="+380999999999" required type="tel"/>
                </label>
            </div>
            <div class="input-block">
                <label>
                    Пароль
                    <input class="input-form" name="password" placeholder="***********" required type="password"/>
                </label>
            </div>
            <div class="input-block">
                <label>
                    Пароль
                    <input class="input-form" name="accpassword" placeholder="***********" required type="password"/>
                </label>
            </div>
            <div class="accept-btn">
                <button type="submit" name="submit" class="btn-send">Реєстрація</button>
            </div>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="../public/js/main.js" type="text/javascript"></script>

<footer>
    <ul class="footer-menu">
        <li class="menu-item">© 2022. All you need. Food delivery</li>
    </ul>
</footer>

</body>

</html>