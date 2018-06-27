<?php
$menesiuVardai = array (1=>'Sausis', 2=>'Vasaris', 3=>'Kovas', 4=>'Balandis', 5=>'Gegužė',
    6=>'Birželis', 7=>'Liepa', 8=>'Rugpjutis', 9=>'Rugsėjis', 10=>'Spalis', 11=>'Lapkritis',
    12=>'Gruodis');

$menesiuDienos = array (1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>31, 9=>30,
    10=>31, 11=>30, 12=>31);

foreach ($menesiuDienos as $numberD => $Dienos) {
//    echo $numberD."-".$menesiuDienos."<br>";
    if ($Dienos == 31){

        echo $Dienos."<br>";
        count($Dienos);

    }
//    echo "Metuose yra ".$menesiuSkaicius." mėnesiai turintys 31 dieną";
}
?>