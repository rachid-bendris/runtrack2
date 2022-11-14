<?php
  $abc = true;
  $def = "ballon";
  $ghi = 7;       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>bool</td>
            <td>abc</td>
            <td><?php echo $abc ?></td>
        </tr>  
        <tr>
            <td>string</td>
            <td>def</td>
            <td><?php echo $def ?></td>
        </tr>  
        <tr>
            <td>entier</td>
            <td>ghi</td>
            <td><?php echo $ghi ?></td>
        </tr>  


</body>
</html>