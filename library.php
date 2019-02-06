<?php



function SatirBol($satir){

  list($ad, $anlam1,$anlam2,$anlam3)=explode(":", $satir);
  $anlam="$anlam1 $anlam2 $anlam3";
  $erkek=strpos($anlam," Er. ");
  $kadin=strpos($anlam," Ka. ");
  $uniseks=strpos($anlam,"Erkek ve Kız adı olarak kullanılır");
  $cinsiyet = "";
  if($erkek>0 and $kadin=="") $cinsiyet="Erkek";
  if($erkek=="" and $kadin>0) $cinsiyet="Kadın";
  if($uniseks>0) $cinsiyet="Uniseks";

  return array($ad, $anlam, $cinsiyet);
}

function IsimKarti($SATIR){
  list($AD, $ANLAMI,$CINSIYET )=SatirBol($SATIR);
    if($CINSIYET!=""){
      echo "<b>İSİM:</b>$AD <br>";
      echo "<b>ANLAM:</b>$ANLAMI <br>";
      echo "<b>CİNSİYET:</b>$CINSIYET <br>";
      echo "<hr>";
      SEOListesiYaz($AD);
      echo "<hr>";
    }
}



function DD($diziadi){
  echo "<pre>";
  print_r($diziadi);
  echo "</pre>";
}



function SEOListesiYaz($AD){
  $AD = " <b>$AD</b>";
  echo "<p style='font-size: 10px;'>";
  echo "$AD ne anlama geliyor?";
  echo "$AD ne demek?";
  echo "$AD isminin anlamı?";
  echo "$AD isminin anlamı nedir";
  echo "$AD kelimesinin anlamı nedir";
  echo "$AD nedir?";
  echo "$AD isminin manası nedir?";
  echo "$AD erkek ismi midir?";
  echo "$AD kadın ismi midir?";
  echo "$AD erkek adı midir?";
  echo "$AD kadın adı midir?";
  echo "</p>";

} // SEOListesiYaz





?>
