<?php
/**
 * admin page template
 */
if (!getUser()){
    header("Location: /login");
}
$out = '';
$out2 = '';
$out2 .='<h1>Категорії</h1>';
//for ($i = 0; $i < count($result2); $i++) {
//    $out2 .='<h4>'.$result2[$i][title].'</h4>';
//}

for ($i = 0; $i < count($result); $i++) {
    $out .='<div class="admin__inner">';
    $out .='<div class="admin__inner-box">';
    $out .='<p>'.$result[$i]['title'].'</p>';
    $out .='<img src="/static/images/'.$result[$i]['image'].'" width=50>';
    $out .='<div class="admin__btn">';
    $out .='<div class="admin__inner-link"><a href="/admin/delete/'.$result[$i]['id'].'" onclick="return confirm(\'Точно???\')"> Видалити </a></div>';
    $out .='<div class="admin__inner-link"><a href="/admin/update/'.$result[$i]['id'].'" onclick="return confirm(\'Точно???\')"> Обновити </a></div>';
    $out .='</div>';
    $out .='</div>';
    $out .='</div>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin panel</title>
</head>
<link rel="stylesheet" href="stile.css">

<body>
    <div class="container">
        <h1>Admin panel</h1>
        <div><a href="admin/create">Create</a></div>
        <div><a href="/logout">Logout</a></div>
        <?php

        echo $out2;
        echo $out;
        ?>
    </div>

</body>

</html>
