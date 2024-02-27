<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Описание состава блюда">
    <meta name="Keywords" content="еда, доставка, ресторан, итальянская кухня, пицца">
    <title>Товар ресторана итальянской кухни</title>
    <link rel="stylesheet" href="style.css">
</head>
<script>
        function add(val, slot){
        elem = document.getElementById('number'+slot);
        if (val === "+"){
            if (elem.value < 10){
                elem.value = Number(elem.value) + 1;
            }
        } else {
            if (elem.value > 0){
                elem.value = Number(elem.value) - 1;
            }
        }
        let cost = document.getElementById('c'+slot);
        let Mcost = document.getElementById('cost'+slot);
        Mcost.innerHTML = Number(cost.value)*Number(elem.value);
    }
        
    function del(val) {
            let elem = document.getElementById('pos' + val);
            elem.parentNode.removeChild(elem);
            counter();
        }
</script>
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
    if (!empty($_SESSION)){
        ?>
        <div class="tovar-pos">
            <div class="menu-name" onclick="window.location.href = 'index.php'">
                <div><img src="assets/back.png"></div>
                <div>К выбору блюда</div>
            </div>
        </div>
    
        <div class="cart-block">
            <div class="menu-name">
                <div>Корзина</div>
                <div class="len"> <span id="len"></span> </div>
            </div>
        </div>
    <div class="cart-list">
        <?
        if (!empty($_SESSION['cart'])){

        $a = 0;
        foreach ($_SESSION['cart'] as $pos){
            ?>

            <div class="cart-pos" style="border-bottom: #CFCFCF solid 1px;" id="pos<?echo $a?>">
                <div class="cart-img" style="width: 20%"><img src="<?echo $pos['img']?>"></div>
                <div class="ab-name" style="width: 40%">
                    <div class="c-name"><?echo $pos['name']?></div>
                    <div class="c-ab"><?echo $pos['about']?></div>
                </div>
                <div class="buts" style="width: 20%">
                    <button onclick="add('-', <?echo $a?>)"><div>-</div></button>
                    <input type="number" min="0" max="100" class="howmuch" id='number<?echo $a?>' value="<?echo $pos['count']?>" placeholder="0" readonly="readonly">
                    <button onclick="add('+', <?echo $a?>)"><div>+</div></button>
                    <input type="hidden" value="<?echo $pos['cost']?>" id="c<?echo $a?>">
                </div>
                <div class="c-cost" style="width: 10%">
                    <span id="cost<?echo $a?>"><?echo $pos['cost']?></span> ₽
                </div>
                <div class="delete" style="width: 10%">
                    <button type="button" onclick="del(<?echo $a?>)"><div>x</div></button>
                </div>
            </div>

            
        <?$a = $a+1;}}
        ?>
    </div>

    <div class="itog">
        <!-- <div class="itog-text">
            <div class="itog-c">Итого: <span style="font-size: 48px;">500 ₽</span></div>
            <div class="itog-free">До бесплатной доставки не хватет: <span style="color: green">100 ₽</span></div>
            <div class="itog-min">Минимальная сума заказа 1500 ₽</div>
        </div> -->
        <div class="to-cart" onclick="window.location.href='zakaz.php'">
            <div>Оформить заказ</div>
        </div>
    </div>

<?}

else{
    ?>
    <div class="error">
        <div style="font-size: 64px; font-weight: bold; color: white;">Вы не авторизованы, корзина недоступна</div>
    </div>
    <?
}?>
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