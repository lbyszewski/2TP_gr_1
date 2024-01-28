<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="add.php" method="post">
        <input type="text" name="one"><br>
        <input type="submit" value="show">
   </form>

   <?php
    
    
  for($k = 1;$k<=4;$k++){
    
    echo $k;
    echo '<br>';
    echo "petla zewnętrzna";
    echo '<br>';
    for($p = 0;$p<9;$p++){
       
        
        
        
        echo $p. " " ."wnętrze ";
        echo '<br>';
    }
    echo '<br>';
  }
    
?>
</body>
</html>