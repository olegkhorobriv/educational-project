<?php 
/**
 * category page template
 */

$out1 = '';
    $out1 .='<div>';
    $out1 .='<h4> Категорія '.$cat['title'].'</h4>';
$out1 .='<p>'.$cat['desctipion'].'</p>';
    $out1 .='</div>';
   

$out = '';
for ($i = 0; $i < count($result); $i++) {
    $out .='<div>';
    $out .='<h4>'.$result[$i]['title'].'</h4>';
    $out .='<p>'.$result[$i]['descr_min'].'</p>';
    $out .='<img src="/static/images/'.$result[$i]['image'].'" width=200>';
    $out .='<div><a class="pure-button pure-button-primary" href="/article/'.$result[$i]['url'].'">Читать полностью</a></div>';
    $out .='</div>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
<link rel="stylesheet" href="/stile.css">
<body>
   <div class="container">
       <?php 
        echo $out1;
       echo $out; 
       ?>
   </div>
    
</body>
</html>