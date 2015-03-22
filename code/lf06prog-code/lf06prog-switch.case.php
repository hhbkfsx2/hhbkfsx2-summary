<?php
 $note = $_POST["txt_note"];
 
 switch ($note)
 {
  case 1:  { echo "Sehr gut";
             break;
           }
  case 2:  { echo "Gut";
             break;
           }
  default: { echo "ERR: not acceptable!";
	       }
 }
?>
