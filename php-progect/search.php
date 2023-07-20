<?php
require_once 'config/db.php';
require_once 'core/function_db.php';
require_once 'core/function.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Пошук: <?php echo $_POST['search']?></title>
</head>
<body>
    <h2>Пошуковий запрос: <?php echo $_POST['search']?></h2>
    <?php
        $searchget = trim($_POST['search']);
        $query = "SELECT * FROM info WHERE title LIKE '%".$searchget."%'";
//        var_dump($searchget);
        $serchres = select($query);
        $out = '';
        for($i = 0; $i < count($serchres); $i++){
    $out .= '<div class="info__inner-blog">';
    $out .='<div class="title">'.$serchres[$i]['title'].'</div>';
    $out .='<img src="/static/images/'.$serchres[$i]['image'].'" width=200>';
    $out .='<p>'.$serchres[$i]['descr_min'].'</p>';
    $out .='<p>'.$serchres[$i]['description'].'</p>';
    $out .= '</div>';
        }
        echo $out;
 
    ?>
    
    
</body>
</html>