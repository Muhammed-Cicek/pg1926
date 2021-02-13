<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php
   settype($para100,"integer");
   settype($para50,"integer");
   settype($para20,"integer");
   settype($para10,"integer");
   settype($para5,"integer");
   settype($para1,"integer");
   settype($para010,"integer");
   settype($para05,"integer");
   settype($para025,"integer");
   settype($para010,"integer");
   settype($para005,"integer");
   settype($para001,"integer");

    $x=$_POST['sayi']; 
   if($x<200){ #200 TL banknotun üstünde para üstü verilemeyeceğinden
    $para100=$x/100;
     $x=$x-$para100*100;
    $para50=$x/50;
     $x=$x-$para50*50;   
    $para20=$x/20;
     $x=$x-$para20*20;  
    $para10=$x/10;      
     $x=$x-$para10*10;   
    $para5=$x/5;
     $x=$x-$para5*5;   
    $para1=$x/1;
     $x=$x-$para1*1; 
    $para05=$x/0.5;
     $x=$x-$para05*0.5;
    $para025=$x/0.25;
     $x=$x-$para025*0.25;  
    $para010=$x/0.10;
     $x=$x-$para010*0.10; 
    $para005=$x/0.05;
     $x=$x-$para005*0.05;   
    $para001=$x/0.01;


   }

   if($para100!=0)
   echo "\n 100 TL lik = $para100 adet";
   
 else if($para50!=0)
 echo "\n 50 TL lik  = $para50 adet";
   
 else if($para20!=0)
 echo  "\n 20 TL lik  = $para20 adet";
   
 else if($para10!=0)
 echo "\n 10 TL lik  = $para10 adet";
   
 else if($para5!=0)
 echo "\n 5 TL lik   = $para5 adet";
   
 else if($para1!=0)
 echo "\n 1 TL lik   = $para1 adet";
   
 else if($para05!=0)
 echo "\n 50 kuruşluk = $para05 adet";

 else if($para025!=0)
 echo "\n 25 kuruşluk = $para025 adet";
   
 else if($para010!=0)
 echo "\n 10 kuruşluk = $para010 adet";
   
 else if($para005!=0)
 echo "\n 5 kuruşluk  = $para005 adet";
    
 else if($para001!=0)
 echo "\n 1 kuruşluk  = $para001 adet"; 

 else
 echo "200 veya üzeri para girilemez!!!."
?>
<A HREF="javascript:javascript:history.go(-1)">Tekrar denemek ister misiniz!</A>
<br />
</body>
</html>
