<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?session_start();?>
    <header>
        <div class="logo" onclick="window.location.href = 'index.php'"><img src="assets/logo.png"></div>
        <div class="place">
            <div class="mark"><img src="assets/mark.png" width="50px" height="50px"></div>
            <div class="inp"><input type="text" placeholder="Введите адрес доставки"></div>
            <div class="mark"><button type="button" onclick="window.location.href = 'index.php'"><img src="assets/find.png"  width="50px" height="50px"></button></div>
        </div>
        <div class="call" onclick="alert('Не работает')">
            <div><img src="assets/call.png" width="50px" height="50px"></div>
            <div class="number">
                <div class="num">Контакты</div>
                <div class="numm">+7 (917) 510-57-59</div>
            </div>
        </div>
        <div class="log" onclick="window.location.href='reg.php'" style="cursor: pointer;">
            <div class="logimg"><img src="assets/Profile.png" width="50px" height="50px"></div>
            <div>Войти</div>
        </div>
        <div class="cart" onclick="window.location.href= 'cart.php'">
            <span>Корзина</span>
        </div>
    </header>
    <div class="categories tovar">
        <div class="chosen"><a href="error.php">Мясные блюда</a></div>
        <div><a href="error.php">Супы</a></div>
        <div><a href="error.php">Салаты</a></div>
        <div><a href="error.php">Паста/ризотто</a></div>
        <div><a href="error.php">Гриль меню</a></div>
        <div><a href="error.php">Напитки</a></div>
    </div>
    <?
    if (empty($_SESSION)){
        ?>

    <div class="tovar-pos">
        <div class="menu-name" onclick="window.location.href = 'cart.php'">
            <div><img src="assets/back.png"></div>
            <div>В корзину</div>
        </div>
    </div>

    <div class="cart-block" style="padding-top: 0px;">
        <div class="menu-name">
            <div>Авторизация</div>
        </div>
    </div>

    <div class="oform" style="padding-bottom: 150px;">
        <div class="block">
            <form action="serv/reg.php" method="post">
                <div class="b-head" style="padding-bottom: 30px;">Регистрация</div>
                <div class="b-inputs" style="justify-content: center; gap: 50px;">
                    <div class="input"><input type="text" placeholder="Телефон" name="login" required></div>
                    <div class="input"><input type="text" placeholder="Пароль" name="pass" required></div>
                    <div class="input" style="width: 100%;"><input type="text" placeholder="Подтвердите пароль" name="conf" required></div>
                    <div class="input" style="width: 100%; margin:0;"><button type="submit">Зарегистрироваться</button></div>
                </div>
            </form>
        </div>
        <div class="block">
            <form action="serv/auth.php" method="post">
                <div class="b-head" style="padding-bottom: 30px;">Авторизация</div>
                <div class="b-inputs" style="justify-content: center; gap: 50px;">
                    <div class="input"><input type="text" placeholder="Телефон" name="login" required></div>
                    <div class="input"><input type="text" placeholder="Пароль" name="pass" required></div>
                    <div class="input" style="width: 100%; margin:0;"><button type="submit">Авторизоваться</button></div>
                </div>
            </form>
        </div>
    </div>
    
<?}
else{
    ?>
    <div class="error" style="flex-direction: column;">
        <div style="font-size: 64px; font-weight: bold; color: white;">вы зарегистрированы</div><br>
        <div style="color: white; cursor:pointer" onclick="window.location.href='serv/abort.php'">Выйти из аккаунта</div>       
        <!-- <a href="serv/abort.php">выйти из аккаунта</a> -->
    </div>
    <?
}
    ?>
    <div class="tovar-pos">
        <div class="menu-name" onclick="window.location.href = 'adm.php'">
            <div><img src="assets/back.png"></div>
            <div>Войти как админ</div>
        </div>
    </div>
    <footer>
        <div class="goup" onclick="window.scrollTo(0, 0)"><img src="assets/go-up.png"></div>
        <div class="f-about">
            <div class="logo"><img src="assets/f-logo.png"></div>
            <div class="f-text">© ОАО «Порапоесть»</div>
            <div class="f-text">Пользовательское соглашение</div>
            <div class="f-text">Карта сайта</div>
            <div class="f-text">Политика конфиденциальности</div>
        </div>
        <div class="links">
            <div class="link"><a href="error.php">О ресторане</a></div>
            <div class="link"><a href="error.php">Условия доставки</a></div>
            <div class="link"><a href="error.php">Возврат товара</a></div>
            <div class="link"><a href="error.php">Акции</a></div>
        </div>
    </footer>
</body>
</html>