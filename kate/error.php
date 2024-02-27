<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Ошибка">
    <meta name="Keywords" content="еда, доставка, ресторан, итальянская кухня, пицца">
    <title>Ошибка ресторана</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
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

    <div class="error">
        <div style="font-size: 64px; font-weight: bold; color: white;">Упс, страница не найдена,<br>через 2 секунды вы вернетесь обратно</div>
        <script>
            window.setTimeout(function(){
                window.history.back(-1);
            }, 2000)
        </script>
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