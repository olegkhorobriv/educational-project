<!--
/**
 * main page template
 */
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Spectral:400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="stile.css">

<body>
    <header class="header">
        <div class="container">
            <div class="header_inner">
                <div class="header_inner-menu">
                    <ul>
                        <li><a href="register">Реєстрація</a></li>
                        <li><a href="login">Ввійти</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form action="search" method="POST">
                        <input type="search" name="search" placeholder="Пошук">
                    </form>
                </div>

            </div>
        </div>
    </header>
    <div class="cat">
        <div class="container">
            <div class="cat__inner">
               <div class="cat__inner-title">Категорії</div>
                <div class="cat__inner-box">
                    <a href="cat/garri-potter">Гаррі потер</a>
                    <a href="cat/angry">Бісить</a>
                </div>
            </div>
        </div>
    </div>
    <div class="info">
        <div class="container">
            <div class="info__inner">

                <?php
$out = '';


for ($i = 0; $i < count($result); $i++) {
    $out .= '<div class="info__inner-blog">';
    $out .='<div class="title">'.$result[$i]['title'].'</div>';
    $out .='<img src="/static/images/'.$result[$i]['image'].'" width=200>';
    $out .='<p>'.$result[$i]['descr_min'].'</p>';
    $out .='<a href="/article/'.$result[$i]['url'].'"> Читати повністю </a>';
    $out .= '</div>';
}
echo $out;
?>
            </div>
        </div>
    </div>

</body>

</html>
