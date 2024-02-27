<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Доставка/самовывоз еды">
    <meta name="Keywords" content="еда, доставка, ресторан, итальянская кухня, пицца">
    <title>Доставка с ресторана</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?session_start()?>
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
    if (!empty($_SESSION)){
        ?>
    <div class="tovar-pos">
        <div class="menu-name" onclick="window.location.href = 'cart.php'">
            <div><img src="assets/back.png"></div>
            <div>В корзину</div>
        </div>
    </div>

    <div class="cart-block">
        <div class="menu-name">
            <div>Оформление заказа</div>
        </div>
    </div>

    <div class="oform">
        <div class="block">
            <div class="b-head">1. Контактная информация</div>
            <div class="b-inputs">
                <div class="input"><input type="text" placeholder="Имя*"></div>
                <div class="input"><input type="text" placeholder="Телефон*"></div>
            </div>
        </div>
        <div class="block">
            <div class="b-head">2. Доставка</div>
            <div class="buttons">
                <div class="buttons-b">
                    <button class="chossen.l">Доставка</button>
                    <button class="chossen.r">Самовывоз</button>
                </div> 
            </div>
         
            <div class="b-head" style="font-size: 22px;">Адрес доставки</div>
            <div class="inputs-2">
                <div style="width: 78%;"><input type="text" placeholder="Укажите улицу*"></div>
                <div style="width: 18%;"><input type="text" placeholder="Номер дома*"></div>
                <div style="width: 38%;"><input type="text" placeholder="№ квартиры/офиса"></div>
                <div style="width: 28%;"><input type="text" placeholder="Подъезд"></div>
                <div style="width: 28%;"><input type="text" placeholder="Этаж"></div>
                <div style="width: 100%;"><input type="text" placeholder="Комментарий"></div>
            </div>
        </div>
        <div class="block">
            <div class="b-head">3. Оплатить</div>
            <div class="buttons-b a3">
                <div class="chossen l2"><div>Оплата онлайн</div></div>
                <div class="chossen m2"><div>Курьеру картой</div></div>
                <div class="chossen r2"><div>Наличными</div></div>
            </div>
            <div class="inputs-2">
                <div style="width: 50%;"><input type="text" placeholder="Сдача с"></div>
            </div>
        </div>
        <div class="block">
            <div class="b-head">4. Когда доставить</div>
            <div class="pop">
                
                <div class="inputs-2">
                    <div style="width: 40%;"><input type="time" placeholder="Укажите время"></div>
                </div>
            </div>
            <div class="inputs-2">
                <div style="width: 40%;"><input type="text" placeholder="Количество персон"></div>
            </div>
            <div class="b-head" style="font-size: 22px;">Хотите мы позвоним?</div>
            <div class="check">
                <div><input type="radio" name="check"> Не перезванивать</div>
                <div><input type="radio" name="check"> Потребуется звонок оператора</div>
            </div>
        </div>
        <div class="block check">
            <div><input type="checkbox"></div>
            <div>Я согласен на обработку моих перс. данных в соответствии с Условиями</div>
            <div class="cart" onclick="window.location.href= 'cart.php'">
                <span>Оформить заказ</span>
            </div>
        </div>
    </div>
    <?}
else{
?>
    <div class="error">
        <div style="font-size: 64px; font-weight: bold; color: white;">Вы не авторизованы, корзина недоступна</div>
    </div>
    <?
}
    ?>

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