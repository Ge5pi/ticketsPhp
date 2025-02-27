<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Покупка билетов</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>


    <header>
        <nav>
            <a class="main">Главная страница</a>
            <div class="loga">
                <a class="login" href="login.html">Log in</a>
                <a class="rega" href="register.html">Sign up</a>
</div>
        </nav>
        <h1>Bilety.com</h1>
    </header>
    <form action="../config/save.php" method="POST">
        <div class="card">
            <div class="upper">
                <div class="left">
                    <span class="from">Вылет из: Караганда</span>
                    <span class="to">Куда: Нью-Йорк</span>
                </div>
                <span class="time">20 февраля 2025</span>
                <span class="price">Цена: сто тыщ мильонов</span>
            </div>
            <div class="lower">
                <input type="text" placeholder="name" name="name" id="name" class="name" required>
                <input type="tel" name="phone" id="phone" placeholder="+7 --- --- ----" required>
                <button type="submit">Оформить заказ</button>
            </div>
        </div>
    </form>

</body>

</html>