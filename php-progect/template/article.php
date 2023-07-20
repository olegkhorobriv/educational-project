<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $result['title']; ?></title>
</head>
<link href="https://fonts.googleapis.com/css?family=Spectral:400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href='/stile.css'>
<body>
      <header class="header">
        <div class="container">
            <div class="header_inner">
                <div class="header_inner-menu">
                    <ul>
                        <li><a href="/register">Реєстрація</a></li>
                        <li><a href="/login">Ввійти</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form action="" method="get">
                        <input type="text" name="search" placeholder="Пошук">
                    </form>
                </div>

            </div>
        </div>
    </header>
   <div class="inform">
       <div class="container">
           <div class="inform-text">
               <?php 
/**
 * article page template
 */

$out = '';
    $out .='<div>';
    $out .='<h4>'.$result['title'].'</h4>';
    $out .='<p>'.$result['descr_min'].'</p>';
    $out .='<img src="/static/images/'.$result['image'].'" width=300px>';
$out .='<p>'.$result['description'].'</p>';
    $out .='</div>';
    echo $out;
?>
           </div>
       </div>
   </div>
    
</body>
</html>

