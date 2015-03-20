<?php
 $ein_array = array();	
 $ein_array[0] = $_POST["txt_eingabe_1"];
 $ein_array[1] = $_POST["txt_eingabe_2"];
 
 $noch_ein_array = array();
 $noch_ein_array[] = $_POST["txt_eingabe_1"];
 $noch_ein_array[] = $_POST["txt_eingabe_2"];
 
 $alternatives_array = array("$_POST["txt_eingabe_1"]", "$_POST["txt_eingabe_2"]");
 
 echo '$ein_array[0] gibt den Wert '.$ein_array[0].' aus.<br />';
 echo '$noch_ein_array[0] gibt ebenfalls den Wert '.$noch_ein_array[0].' aus.<br />';
?>
