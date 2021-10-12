<!-- Latihan Superglobals (Globals) PHP -->
<?php 
$x = 100;
$y = 1000; 

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] - $GLOBALS['y'];
}

addition();
echo $z;
?>