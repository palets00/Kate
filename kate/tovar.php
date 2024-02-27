<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Выбор блюда">
    <meta name="Keywords" content="еда, доставка, ресторан, итальянская кухня, пицца">
    <title>Товар ресторана итальянской кухни</title>
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
    <div class="categories tovar">
        <div class="chosen"><a href="error.php">Мясные блюда</a></div>
        <div><a href="error.php">Супы</a></div>
        <div><a href="error.php">Салаты</a></div>
        <div><a href="error.php">Паста/ризотто</a></div>
        <div><a href="error.php">Гриль меню</a></div>
        <div><a href="error.php">Напитки</a></div>
    </div>

    <div class="tovar-pos">
        <div class="menu-name" onclick="window.history.back(-1)">
            <div><img src="assets/back.png"></div>
            <div>Вернуться назад</div>
        </div>
        <div class="big-tovar">
            <div class="tov-img"><img src="assets/big-tovar.png"></div>
            <div class="tovar-about">
                <div class="tovar-name">Ягненок</div>
                <div class="tovar-desc">помидор, сыр фета, масло подсолнечное, капуста пекинская, 
                    перец сладкий красный, огурцы, оливки без косточек</div>
                <div class="tovar-w">Вес: 1 кг</div>
                <div class="cost-buy">
                    <div class="to-cart">
                        <div>Корзина</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                    <div class="big-cost">700 ₽</div>
                </div>
                <div class="kbu">
                    <div class="belki">
                        <div class="what">Белки</div>
                        <div>17.23</div>
                    </div>
                    <div class="belki">
                        <div class="what">Жиры</div>
                        <div>7.63</div>
                    </div>
                    <div class="belki">
                        <div class="what">Углеводы</div>
                        <div>22.35</div>
                    </div>
                    <div class="belki">
                        <div class="what">Ккал</div>
                        <div>234</div>
                    </div>
                    <div class="belki">
                        <div class="what">Вес</div>
                        <div>210 г</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-name">С ЭТИМ ТОВАРОМ ПОКУПАЮТ</div>
        <div class="menu-list">
            <div class="pos">
                <div class="img" onclick="window.location.href= 'tovar.php'"><img src="assets/pos1.png"></div>
                <div class="wname">
                    <div class="name">Гусь</div>
                    <div class="weight">Вес: 225 г</div>
                </div>
                <div class="pos-about">Фаршированный яблоками</div>
                <div class="cost-cart">
                    <div class="cost">17 900 ₽</div>
                    <div class="to-cart">
                        <div>В корзину</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                </div>
            </div>
            <div class="pos">
                <div class="img" onclick="window.location.href= 'tovar.php'"><img src="assets/pos2.png"></div>
                <div class="wname">
                    <div class="name">Утка</div>
                    <div class="weight">Вес: 225 г</div>
                </div>
                <div class="pos-about">Фаршированная рисом, курагой и айвой</div>
                <div class="cost-cart">
                    <div class="cost">220 ₽</div>
                    <div class="to-cart">
                        <div>В корзину</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                </div>
            </div>
            <div class="pos">
                <div class="img" onclick="window.location.href= 'tovar.php'"><img src="assets/pos3.png"></div>
                <div class="wname">
                    <div class="name">Ягненок</div>
                    <div class="weight">Вес: 225 г</div>
                </div>
                <div class="pos-about">Фаршированный гречневой кашей, 
                    курагой, апельсином и зеленым яблоком</div>
                <div class="cost-cart">
                    <div class="cost">520 ₽</div>
                    <div class="to-cart">
                        <div>В корзину</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                </div>
            </div>
            <div class="pos">
                <div class="img" onclick="window.location.href= 'tovar.php'"><img src="assets/pos4.png"></div>
                <div class="wname">
                    <div class="name">Индейка</div>
                    <div class="weight">Вес: 225 г</div>
                </div>
                <div class="pos-about">Фаршированный гречневой кашей, 
                    курагой, апельсином и зеленым яблоком</div>
                <div class="cost-cart">
                    <div class="cost">1 620 ₽</div>
                    <div class="to-cart">
                        <div>В корзину</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                </div>
            </div>
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

