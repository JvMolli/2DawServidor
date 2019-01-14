<?php
$abc=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","U","V","W","X","Y","Z"];
function paintABC($abce){ echo "
<div class='grid_container'>
  "; foreach ($abce as $letra) { echo "
  <div class='pepe'>$letra</div>
  "; } echo "
</div>
"; } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">


    </head>
        <body>
             <?php paintABC($abc); ?>
        </body>
    </html>
