<?php 
  $x = 0.0001;
  for ($i = 0; $i <= 1000000; $i++) {
    $x += sqrt($x);
  }
  print "I am running on host -> " . gethostname() ." (" . $_SERVER['SERVER_ADDR'] . ")" . "\n";
?>
