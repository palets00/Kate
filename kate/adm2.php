<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товар - Админка</title>
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
    require 'serv/connect.php';
    $page = mysqli_query($connect, "SELECT*FROM `admin`");
    $page = mysqli_fetch_all($page);
    ?>


    <form action="serv/redact.php" method="post">
    <div class="tovar-pos">
        <div class="menu-name" onclick="window.history.back(-1)">
            <div><img src="assets/back.png"></div>
            <div>Вернуться назад</div>
        </div>
        <div class="big-tovar">
            <input type="hidden" value="<?echo $page[1][0]?>" name="id">
            <div class="tov-img"><img src="assets/big-tovar.png"></div>
            <div class="tovar-about">
                <div class="tovar-name"><input name='name' class="inp-pos" style="width: 100%;" type="text" value='<?echo $page[1][1]?>'></div>
                <div class="tovar-desc"><input name='about' class="inp-pos" style="width: 100%;" type="text" value='<?echo $page[1][4]?>'></div>
                <div class="to-cart" style="width:30%;">
                        <div><button type="submit" class='redact'>Редактировать</button></div>
                </div>
                <div class="tovar-w">Вес: 1 кг</div>
                <div class="cost-buy">
                    <div class="to-cart" style="width:30%;">
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
</form>

<div class="menu">
            <div class="menu-name adm">
                    <div>С ЭТИМ ТОВАРОМ ПОКУПАЮТ</div>                    
            </div>
        <div class="menu-list red">
            <form action='serv/redact.php' method='post' class='pos'>
                    <input type="hidden" value="<?echo $page[6][0]?>" name="id">
                    <div class="img" onclick="window.location.href= 'adm2.php'"><img src="assets/pos1.png"></div>
                    <div class="wname">
                        <div class="name"><input name='name' class="inp-pos" type="text" value='<?echo $page[6][1]?>'></div>
                        <div class="weight">Вес: <input type="text" name="weight" value="<?echo $page[6][3]?>" class="inp-pos wgh"></div>
                    </div>
                    <div class="pos-about"><input name='about' class="inp-pos ab" type="text" value='<?echo $page[6][4]?>'></div>
                    <div class="cost-cart">
                        <div class="cost"><input name='cost' class="inp-pos" type="text" value='<?echo $page[6][2]?>'> ₽</div>
                        <div class="to-cart">
                        <div><button type="submit" class='redact'>Редактировать</button></div>
                        </div>
                    </div>
            </form>
            <form action='serv/redact.php' method='post' class='pos'>
                    <input type="hidden" value="<?echo $page[7][0]?>" name="id">
                    <div class="img" onclick="window.location.href= 'adm2.php'"><img src="assets/pos1.png"></div>
                    <div class="wname">
                        <div class="name"><input name='name' class="inp-pos" type="text" value='<?echo $page[7][1]?>'></div>
                        <div class="weight">Вес: <input type="text" name="weight" value="<?echo $page[7][3]?>" class="inp-pos wgh"></div>
                    </div>
                    <div class="pos-about"><input name='about' class="inp-pos ab" type="text" value='<?echo $page[7][4]?>'></div>
                    <div class="cost-cart">
                        <div class="cost"><input name='cost' class="inp-pos" type="text" value='<?echo $page[7][2]?>'> ₽</div>
                        <div class="to-cart">
                        <div><button type="submit" class='redact'>Редактировать</button></div>
                        </div>
                    </div>
            </form>
            <form action='serv/redact.php' method='post' class='pos'>
                    <input type="hidden" value="<?echo $page[8][0]?>" name="id">
                    <div class="img" onclick="window.location.href= 'adm2.php'"><img src="assets/pos1.png"></div>
                    <div class="wname">
                        <div class="name"><input name='name' class="inp-pos" type="text" value='<?echo $page[8][1]?>'></div>
                        <div class="weight">Вес: <input type="text" name="weight" value="<?echo $page[8][3]?>" class="inp-pos wgh"></div>
                    </div>
                    <div class="pos-about"><input name='about' class="inp-pos ab" type="text" value='<?echo $page[8][4]?>'></div>
                    <div class="cost-cart">
                        <div class="cost"><input name='cost' class="inp-pos" type="text" value='<?echo $page[8][2]?>'> ₽</div>
                        <div class="to-cart">
                        <div><button type="submit" class='redact'>Редактировать</button></div>
                        </div>
                    </div>
            </form>
            <form action='serv/redact.php' method='post' class='pos'>
                    <input type="hidden" value="<?echo $page[9][0]?>" name="id">
                    <div class="img" onclick="window.location.href= 'adm2.php'"><img src="assets/pos1.png"></div>
                    <div class="wname">
                        <div class="name"><input name='name' class="inp-pos" type="text" value='<?echo $page[9][1]?>'></div>
                        <div class="weight">Вес: <input type="text" name="weight" value="<?echo $page[9][3]?>" class="inp-pos wgh"></div>
                    </div>
                    <div class="pos-about"><input name='about' class="inp-pos ab" type="text" value='<?echo $page[9][4]?>'></div>
                    <div class="cost-cart">
                        <div class="cost"><input name='cost' class="inp-pos" type="text" value='<?echo $page[9][2]?>'> ₽</div>
                        <div class="to-cart">
                        <div><button type="submit" class='redact'>Редактировать</button></div>
                        </div>
                    </div>
            </form>
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