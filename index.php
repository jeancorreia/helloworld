<html>
 <head>
  <title>My First Deploy PHP on OpenSHIFT</title>
  <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
 </head>
 <body>
 <?php 
  $page = $_SERVER['PHP_SELF'];
  $sec = "10";
  echo '<p>Hello World v10</p>';
  echo '<p>App Server:</p>',gethostname();
  echo '<p>Contador Aleatorio:</p>',rand() . "\n";
 ?>
 </body>
</html>
