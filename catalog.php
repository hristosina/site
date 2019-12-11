<!DOCTYPE html>
<html>
<head>
 <title>Библиотека</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="style.css">
</head>
<header>
  <a href="" class="logo">Библиотека</a>
  <nav>
      <ul class="topmenu">
        <li><a href="main.php">Главная</a></li>
        <li><a href="catalog.php" class="submenu-link">Категория</a>
          <ul class="submenu">
            <li><a href="">Понравилось пользователям</a></li>
            <li><a href="">Русская литература</a></li>
            <li><a href="">Зарубежная литература</a></li>
          </ul>
        </li>
        <li><a href="search.php">Поиск</a></li>
        <li><?php if($_COOKIE['user'] ==''): ?><a href="login.php">Войти</a><?php else: ?><a href="exit.php">Выйти</a><?php endif; ?></p></li>
      </ul>
    </nav>
</header> 
<body>
<div style="margin-left: auto; margin-right: auto; margin-top: 15px; width: 900px; height:440px;  border: 3px solid #e8e8e8; padding: 8px; background-color: white">
<h1>Достоевский, "Идиот"</h1>
<hr>
<h3 style="color:#273037"><img src="idiot.jpg" height="300" alt="Идиот" style="float:left; margin: 5px">
"Идиот" - роман, в котором Достоевский впервые с подлинной страстью, ярко и полно изобразил положительного героя, каким его представлял. В князе Мышкине соединились черты образа Христа и одновременно ребенка, умиротворенность, граничащая с беспечностью, и невозможность пройти мимо беды ближнего. В "нормальном" обществе людей, одержимых корыстью и разрушительными страстями, князь Мышкин - идиот. В мире, где красота замутнена нечистыми помыслами людей, такой герой беспомощен, хотя и прекрасен. Но "красота спасет мир!", утверждает Достоевский устами князя Мышкина, и в мире становится светлей.
<a style="color: #D5B45B" href="">Скачать</a></h3>
</div>
</body>
</html>  