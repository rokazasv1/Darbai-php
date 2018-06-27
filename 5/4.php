
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    <?php
    $color = array('white', 'green', 'red', 'blue', 'black');
    sort($color);
    foreach ($color as $c){
        echo $c."<br>";

    }
    ?>
</table>
</body>
</html>
