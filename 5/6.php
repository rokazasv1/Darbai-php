<?php
if (isset($_POST['submit'])){
$tekstas= $_POST['skaiciai'];
$masyvas=explode ( ',' , $tekstas );

$average = array_sum($masyvas)/count($masyvas);
echo $average;
}
?>

<form method="post">
    <input type="text" name="skaiciai" >
    <input type="submit" name="submit">
</form>
