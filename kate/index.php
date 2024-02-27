<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?
    require 'serv/connect.php';
    $page = mysqli_query($connect, "SELECT*FROM `admin`");
    $page = mysqli_fetch_all($page);
    ?>
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

    <div class="banner"><img src="assets/banner.png" width="100%" height="100%"></div>

    <div class="categories">
        <div class="chosen"><a href="error.php">Мясные блюда</a></div>
        <div><a href="error.php">Супы</a></div>
        <div><a href="error.php">Салаты</a></div>
        <div><a href="error.php">Паста/ризотто</a></div>
        <div><a href="error.php">Гриль меню</a></div>
        <div><a href="error.php">Напитки</a></div>
    </div>

    <div class="menu">
        <div class="menu-name"><?echo $page[0][1]?></div>
        <div class="menu-list">
            <div class="pos">
                <img src="assets/pangasius.png" onclick="window.location.href= 'tovar.php'" class="card-img-top" width="325" >
                <div class="wname">
                    <div class="name"><?echo $page[1][1]?></div>
                    <div class="weight">Вес: <?echo $page[1][3]?></div>
                </div>
                <div class="pos-about"><?echo $page[1][4]?></div>
                <div class="cost-cart">
                    <div class="cost"><?echo $page[1][2]?> ₽</div>
                    <div class="to-cart" onclick="window.location.href='serv/add_cart.php?id=1'">
                        <div>В корзину</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
            <div class="pos">
            <img src="assets/утка.png" onclick="window.location.href= 'tovar.php'" class="card-img-top" width="325" >
                <div class="wname">
                    <div class="name"><?echo $page[2][1]?></div>
                    <div class="weight">Вес: <?echo $page[2][3]?></div>
                </div>
                <div class="pos-about"><?echo $page[2][4]?></div>
                <div class="cost-cart">
                    <div class="cost"><?echo $page[2][2]?> ₽</div>
                    <div class="to-cart" onclick="window.location.href='serv/add_cart.php?id=2'">
                        <div>В корзину</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                </div>
            </div>
            <div class="pos">
            <img src="assets/ягненок.png" onclick="window.location.href= 'tovar.php'" class="card-img-top" width="325" >
                <div class="wname">
                    <div class="name"><?echo $page[3][1]?></div>
                    <div class="weight">Вес: <?echo $page[3][3]?></div>
                </div>
                <div class="pos-about"><?echo $page[3][4]?></div>
                <div class="cost-cart">
                    <div class="cost"><?echo $page[3][2]?> ₽</div>
                    <div class="to-cart" onclick="window.location.href='serv/add_cart.php?id=3'">
                        <div>В корзину</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                </div>
            </div>
            <div class="pos">
            <img src="assets/индейка.png" onclick="window.location.href= 'tovar.php'" class="card-img-top" width="325" >
                <div class="wname">
                    <div class="name"><?echo $page[4][1]?></div>
                    <div class="weight">Вес: <?echo $page[4][3]?></div>
                </div>
                <div class="pos-about"><?echo $page[4][4]?></div>
                <div class="cost-cart">
                    <div class="cost"><?echo $page[4][2]?> ₽</div>
                    <div class="to-cart" onclick="window.location.href='serv/add_cart.php?id=4'">
                        <div>В корзину</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-name"><?echo $page[5][1]?></div>
        <div class="menu-list">
            <div class="pos">
            <img src="assets/пеперони (1).png" onclick="window.location.href= 'tovar.php'" class="card-img-top" width="325" >
                <div class="wname">
                    <div class="name"><?echo $page[6][1]?></div>
                    <div class="weight">Вес: <?echo $page[6][3]?></div>
                </div>
                <div class="pos-about"><?echo $page[6][4]?></div>
                <div class="cost-cart">
                    <div class="cost"><?echo $page[6][2]?> ₽</div>
                    <div class="to-cart" onclick="window.location.href='serv/add_cart.php?id=5'">
                        <div>В корзину</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                </div>
            </div>
            <div class="pos">
            <img src="assets/четыресыра.png" onclick="window.location.href= 'tovar.php'" class="card-img-top" width="325" >
                <div class="wname">
                    <div class="name"><?echo $page[7][1]?></div>
                    <div class="weight">Вес: <?echo $page[7][3]?></div>
                </div>
                <div class="pos-about"><?echo $page[7][4]?></div>
                <div class="cost-cart">
                    <div class="cost"><?echo $page[7][2]?> ₽</div>
                    <div class="to-cart" onclick="window.location.href='serv/add_cart.php?id=6'">
                        <div>В корзину</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                </div>
            </div>
            <div class="pos">
            <img src="assets/греческая.png" onclick="window.location.href= 'tovar.php'" class="card-img-top" width="325" >
                <div class="wname">
                    <div class="name"><?echo $page[8][1]?></div>
                    <div class="weight">Вес: <?echo $page[8][3]?></div>
                </div>
                <div class="pos-about"><?echo $page[8][4]?></div>
                <div class="cost-cart">
                    <div class="cost"><?echo $page[8][2]?> ₽</div>
                    <div class="to-cart" onclick="window.location.href='serv/add_cart.php?id=7'">
                        <div>В корзину</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                </div>
            </div>
            <div class="pos">
            <img src="assets/карбонара.png" onclick="window.location.href= 'tovar.php'" class="card-img-top" width="325" >
                <div class="wname">
                    <div class="name"><?echo $page[9][1]?></div>
                    <div class="weight">Вес: <?echo $page[9][3]?></div>
                </div>
                <div class="pos-about"><?echo $page[9][4]?></div>
                <div class="cost-cart">
                    <div class="cost"><?echo $page[9][2]?> ₽</div>
                    <div class="to-cart" onclick="window.location.href='serv/add_cart.php?id=8'">
                        <div>В корзину</div>
                        <div><img src="assets/Buy.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="map">
        <div class="cont">
            <div class="cont-name">КОНТАКТЫ</div>
            <div class="cont-mail">
                <div class="mark"><img src="assets/gmark.png" width="50px" height="50px"></div>
                <div class="our">
                    <div>Наш адрес</div>
                    <div class="mail">Красноярск, ул. Московкая д.56</div>
                </div>
            </div>
            <div class="cont-mail">
                <div class="mark"><img src="assets/mail.png" width="50px" height="50px"></div>
                <div class="our">
                    <div>Наша почта</div>
                    <div class="mail">palets@gmail.com</div>
                </div>
            </div>
            <div class="bron">
                <div class="to-cart">
                    <div>ЗАБРОНИРОВАТЬ СТОЛ</div>
                </div>
                <div class="call-num">
                    <div class="numb">+7 (917) 510-57-59</div>
                    <div class="numbb">Звоните или оставляйте заявку</div>
                </div>
            </div>
            <div class="social">
                <div>Мы в соц сетях:</div>
                <div><img src="assets/vk.png" width="50px" height="50px" ></div>
            </div>
        </div>
    </div>


    <footer>
        <div class="goup" onclick="window.scrollTo(0, 0)"><img src="assets/go-up.png"></div>
        <div class="f-about">
            <div class="logo"><img src="assets/f-logo.png"></div>
            <div class="f-text">&copy © ОАО «Порапоесть»</div>
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