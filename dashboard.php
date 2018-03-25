<?php
session_start();

if(!isset($_SESSION['user_session']))
{
    header("Location: index.php");
}

/*include_once 'header.php';*/
include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM members WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Байки из склепа</title>
    <style>
        body {
            font: 11pt Arial, Helvetica, sans-serif; /* Рубленый шрифт текста */
            margin: 0; /* Отступы на странице */
        }
        h1 {
            font-size: 36px; /* Размер шрифта */
            margin: 0; /* Убираем отступы */
            color: #fc6; /* Цвет текста */
        }
        h2 {
            margin-top: 0; /* Убираем отступ сверху */
        }
        #header { /* Верхний блок */
            background: #0080c0; /* Цвет фона */
            padding: 10px; /* Поля вокруг текста */
        }
        #sidebar { /* Левая колонка */
            float: left; /* Обтекание справа */
            border: 1px solid #333; /* Параметры рамки вокруг */
            width: 20%; /* Ширина колонки */
            padding: 5px; /* Поля вокруг текста */
            margin: 10px 10px 20px 5px; /* Значения отступов */
        }
        #content { /* Правая колонка */
            margin: 10px 5px 20px 25%; /* Значения отступов */
            padding: 5px; /* Поля вокруг текста */
            border: 1px solid #333; /* Параметры рамки */
        }
        #footer { /* Нижний блок */
            background: #333; /* Цвет фона */
            padding: 5px; /* Поля вокруг текста */
            color: #fff; /* Цвет текста */
            clear: left; /* Отменяем действие float */
        }
    </style>
</head>
<body>
<div id="header"><h1>Байки из склепа</h1></div>
<div id="sidebar">
    <p><a href="b_all.html">Все байки</a></p>
    <p><a href="b_author.html">Байки по автору</a></p>
    <p><a href="b_theme.html">Байки по теме</a></p>
    <p><a href="b_popular.html">Популярные байки</a></p>
    <p><a href="logout.php">logout</a></p>
</div>
<div id="content">
    <h2>Алтарь демона </h2>
    <p>Утром, при ярком солнечном свете, всё выглядело совсем не так и мрачно, как
        планировалось, а даже наоборот. От свечей остались одни потёки, «кровь»
        смотрелась как краска, а перья почти целиком разлетелись от ветра. Хорошо
        сохранились только рисунки мелом, но и они были скорее прикольные, чем злые и загадочные.
        Дети с неподдельным интересом разглядывали изображения, но без тени тех чувств, которые
        испытали взрослые ночью при луне.</p>
    <p>Тем не менее, оказался один человек, на которого работа произвела большое
        впечатление, — сторож лагеря. Днём он подошёл к автору «алтаря».</p>
    <p>— Ваша работа? - начал сторож, кивая в сторону площади.<br />
        — А что такое? <br />
        — Ну, как же... Тут кровь..., перья птицы мёртвой..., знаки какие-то страшные нарисованы...,
        а у вас всё же дети маленькие, они испугаться могут...</p>
</div>
<div id="footer">&copy; Влад Мержевич</div>
</body>
</html>