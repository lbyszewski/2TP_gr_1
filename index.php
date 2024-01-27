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
    

   $suma = 0;
    for($i = 1; $i <=7;$i += 3){
        $suma += $i;
        
    }
    echo ($suma);
?>
</body>
</html>