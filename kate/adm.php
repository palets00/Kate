    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная-Админка</title>
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

    <div class="banner"><img src="assets/banner.png" width="100%" height="100%"></div>

    <div class="categories">
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
    <div class="menu">
        <form action="serv/redact.php" method='post'>
            <div class="menu-name adm">
                    <input type="hidden" value='<?echo $page[0][0]?>' name='id'>
                    <div><input value="<?echo $page[0][1]?>" type='text' name='name' class="inp-red"></div>                    
                    <div class="to-cart">
                        <div><button type="submit" class='redact'>Редактировать</button></div>
                    </div>

            </div>
        </form>
        <div class="menu-list red">
            <form action='serv/redact.php' method='post' class='pos'>
                    <input type="hidden" value="<?echo $page[1][0]?>" name="id">
                    <div class="img" onclick="window.location.href= 'adm2.php'"><img src="assets/pos1.png"></div>
                    <div class="wname">
                        <div class="name"><input name='name' class="inp-pos" type="text" value='<?echo $page[1][1]?>'></div>
                        <div class="weight">Вес: <input type="text" name="weight" value="<?echo $page[1][3]?>" class="inp-pos wgh"></div>
                    </div>
                    <div class="pos-about"><input name='about' class="inp-pos ab" type="text" value='<?echo $page[1][4]?>'></div>
                    <div class="cost-cart">
                        <div class="cost"><input name='cost' class="inp-pos" type="text" value='<?echo $page[1][2]?>'> ₽</div>
                        <div class="to-cart">
                        <div><button type="submit" class='redact'>Редактировать</button></div>
                        </div>
                    </div>
            </form>
            <form action='serv/redact.php' method='post' class='pos'>
                    <input type="hidden" value="<?echo $page[2][0]?>" name="id">
                    <div class="img" onclick="window.location.href= 'adm2.php'"><img src="assets/pos1.png"></div>
                    <div class="wname">
                        <div class="name"><input name='name' class="inp-pos" type="text" value='<?echo $page[2][1]?>'></div>
                        <div class="weight">Вес: <input type="text" name="weight" value="<?echo $page[2][3]?>" class="inp-pos wgh"></div>
                    </div>
                    <div class="pos-about"><input name='about' class="inp-pos ab" type="text" value='<?echo $page[2][4]?>'></div>
                    <div class="cost-cart">
                        <div class="cost"><input name='cost' class="inp-pos" type="text" value='<?echo $page[2][2]?>'> ₽</div>
                        <div class="to-cart">
                        <div><button type="submit" class='redact'>Редактировать</button></div>
                        </div>
                    </div>
            </form>
            <form action='serv/redact.php' method='post' class='pos'>
                    <input type="hidden" value="<?echo $page[3][0]?>" name="id">
                    <div class="img" onclick="window.location.href= 'adm2.php'"><img src="assets/pos1.png"></div>
                    <div class="wname">
                        <div class="name"><input name='name' class="inp-pos" type="text" value='<?echo $page[3][1]?>'></div>
                        <div class="weight">Вес: <input type="text" name="weight" value="<?echo $page[3][3]?>" class="inp-pos wgh"></div>
                    </div>
                    <div class="pos-about"><input name='about' class="inp-pos ab" type="text" value='<?echo $page[3][4]?>'></div>
                    <div class="cost-cart">
                        <div class="cost"><input name='cost' class="inp-pos" type="text" value='<?echo $page[3][2]?>'> ₽</div>
                        <div class="to-cart">
                        <div><button type="submit" class='redact'>Редактировать</button></div>
                        </div>
                    </div>
            </form>
            <form action='serv/redact.php' method='post' class='pos'>
                    <input type="hidden" value="<?echo $page[4][0]?>" name="id">
                    <div class="img" onclick="window.location.href= 'adm2.php'"><img src="assets/pos1.png"></div>
                    <div class="wname">
                        <div class="name"><input name='name' class="inp-pos" type="text" value='<?echo $page[4][1]?>'></div>
                        <div class="weight">Вес: <input type="text" name="weight" value="<?echo $page[4][3]?>" class="inp-pos wgh"></div>
                    </div>
                    <div class="pos-about"><input name='about' class="inp-pos ab" type="text" value='<?echo $page[4][4]?>'></div>
                    <div class="cost-cart">
                        <div class="cost"><input name='cost' class="inp-pos" type="text" value='<?echo $page[4][2]?>'> ₽</div>
                        <div class="to-cart">
                        <div><button type="submit" class='redact'>Редактировать</button></div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <div class="menu">
        <form action="serv/redact.php" method='post'>
            <div class="menu-name adm">
                    <input type="hidden" value='<?echo $page[5][0]?>' name='id'>
                    <div><input value="<?echo $page[5][1]?>" type='text' name='name' class="inp-red"></div>                    
                    <div class="to-cart">
                        <div><button type="submit" class='redact'>Редактировать</button></div>
                    </div>

            </div>
        </form>
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
                    <div class="img" onclick="window.location.href= 'adm2.php'"><img src="assets/"></div>
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