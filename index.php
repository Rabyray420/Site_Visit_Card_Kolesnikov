<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Le Panthère - парфюмерия</title>
 <link href="style.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
 
</head>

<body>

<header>
	<a href="index.php"><img id="logo" src="images/logo/logo7.svg" alt="" ></a>
 <nav>
		 

   <a class="nav_buttton" href="index.php">Главная</a>
			

    <button onclick="show('block')" id="registration">Регистрация</button>
    
    <button onclick="show1('block')" id="registration">Войти</button>
      
    <div class="icon-cart">
                <img id="icon-cart" src="images/cart.png" alt="">
                <span>0</span>
    </div>

 </nav>
</header>

<main>
	<div id="silk_background"></div>
 <div id="site_discription">
		Добро пожаловать на сайт интернет-магазина премиум парфюмерии Le Panthère, где каждый аромат — это история, воплощенная в флаконе. Мы предлагаем изысканные духи от знаменитых брендов, тщательно подобранные для истинных ценителей.
<br>
На нашем сайте вы найдете эксклюзивные ароматы, ограниченные коллекции и классические фавориты.

<br>Покупая у нас, вы приобретаете не просто духи, а возможность выразить себя и создать уникальный стиль.
</div>

<div class="container">

        <div class="title">Ассортимент</div>

        <div class="listProduct">

        </div>
    </div>
    <div class="cartTab">
        <h1>Корзина</h1>
        <div class="listCart">
            
        </div>
        <div class="btn">
            <button class="close">закрыть</button>
            <button class="checkOut">ЗАКАЗАТЬ</button>
        </div>
    </div>

    <script src="app.js"></script>

<!-- <?php require_once "lib/products.php"; ?> -->



<div onclick="show('none')" id="gray"></div>
<div id="window">    
    <div  id="signUp" >

        <h2>Регистрация</h2>

        <form method="post" action="lib/reg.php">
            <label for="username">Имя пользователя:</label><br>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Пароль:</label><br>
            <input type="password" id="password" name="password" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <input type="submit" value="Зарегистрироваться">
        </form>
    </div>
</div>

<div onclick="show1('none')" id="gray"></div>
<div id="window1">    
    <div  id="signUp" >

        <h2>Авторизация</h2>

        <form method="post" action="lib/aut.php">
            <label for="username">Имя пользователя:</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Пароль:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Войти">
        </form>
    </div>
</div>


 <script>

	function show(state)
	{
	document.getElementById('window').style.display = state;	
	document.getElementById('gray').style.display = state; 		
	}

    function show1(state)
	{
	document.getElementById('window1').style.display = state;	
	document.getElementById('gray').style.display = state; 		
	}

   
</script> 

</main>

</body>
</html>