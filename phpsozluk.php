<?php

require_once("library.php");

$DosyaIcerigi=file_get_contents("isimler.txt");
$Satirlar=explode("\n",$DosyaIcerigi);

$Anlamlar=array();
$Cinsiyetler=array();
foreach ($Satirlar as $satir) {
  list($AD, $ANLAMI,$CINSIYET )=SatirBol($satir);
  if($CINSIYET!=""){
    $Anlamlar[$AD]=$ANLAMI;
    $Cinsiyetler[$AD]=$CINSIYET;
  }
}


  DD($Cinsiyetler);
  



?>
