<?php

date_default_timezone_set('Europe/Istanbul');

$saat = date("H");
$ilk_vakit = "06";
$ogle  = "10";
$orta_vakit = "17";
$aksam = "20";
$yatsi= "00";

if($saat >= $ilk_vakit AND $saat < $ogle)
{
    echo "Günaydın";
}

else if($saat >= $ogle AND $saat < $orta_vakit )
{
    echo "İyi Günler";
}

else if($saat >= $orta_vakit AND $saat < $aksam)
{
    echo "İyi Akşamlar";
}

else if($saat >= $aksam && $saat < $yatsi)
{
    echo "İyi Geceler";
}

else
{
    echo "Esenlikler Dilerim";
}

?> 

