<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
$girdi=$_POST['sayi'];

$asalsayi=0; $i=2;

do
{
    if ($girdi % $i == 0)
    {
        $asalsayi = 1;
    }
    $i++;
}
while($i<$girdi);

if ($asalsayi != 1)
{
    $hesap="Girilen sayı asal sayıdır!";
}
else
{
    $hesap="Girilen sayı asal sayı değildir!";
}
?>
    <td width="206">Girilen sayı = :</td>
    <td width="213"><?php echo $girdi; ?></td>
 
<h3><?php echo $hesap; ?>  </h3>
    </td>
<A HREF="javascript:javascript:history.go(-1)">Tekrar denemek ister misiniz!</A>
<br />
</body>
</html>

