 <?php 
    $server = gethostname();
    $nro = rand();
    $alpha = ["a","b","c","d","e","f","0","1","2","3","4","5","6","7","8","9"];
    $color = "#";
    for ($i=0; $i<6; $i++) {
        $index = rand(0,count($alpha)-1);
        $color .= $alpha[$index];
    }

  $page = $_SERVER['PHP_SELF'];
  $sec = "5";
  echo '<p>Hello World v18</p>';
  echo '<p>App Server:</p>' . $server;
  echo '<p>Contador Aleatorio:</p>' . $nro . "\n";
 ?>
<html>
 <head>
  <title>My First Deploy PHP on OpenSHIFT</title>
  <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
 </head>
 <body style="background:<?php echo $color ?>">
 </body>
 </html>
