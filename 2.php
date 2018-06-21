<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$a = '';
if (isset($_POST['a']) and ($_POST['b'])and ($_POST['c'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a){
        echo "negalima sudaryti trikampį";
    }else{
        echo "galima sudaryti trikampį";
    }
}
?>
<form action="2.php" method="post">
    A <input type="number" name="a"><br>
    B <input type="number" name="b"><br>
    C <input type="number" name="c"><br>
    <input type="submit">
</form>

</body>
</html>