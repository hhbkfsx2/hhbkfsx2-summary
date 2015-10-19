<?php
 for ($zeile=1;$zeile<=10;$zeile++)
 {
  for ($spalte=1;$spalte<=10;$spalte++)
  {
   $ergebnis=$zeile*$spalte;
   if ($ergebnis<10)
   {
    echo "0";
   }
   echo "$ergebnis ";
  }
  echo "</br>";
 }
?>
