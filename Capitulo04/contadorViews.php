<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <?php
    
    if(isset($_COOKIE['contador'])){
        setcookie('contador',$_COOKIE['contador'] +1);
        echo "Es la vez número " . $_COOKIE['contador'] . " que te contectas.";
    }else{
        echo "Es la primera vez que te contectas";
        setcookie('contador', 2);
    }
    ?>
    </body>
</html>