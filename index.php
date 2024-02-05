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

  $_sum = 0;
  $_numbers = [10,20,30,40,50];
  for($_j = 0; $_j<5; $_j++) {
    $_sum += $_numbers[$_j];
  }

  echo "Suma elementów tablicy wynosi: $_sum ";
  echo '<br>';
  echo '<br>';
  
  function something_new($_c): int{
    if($_c == 0){
      return 1;
    } else {
      return $_c * something_new($_c -1);
    }
    
  }
  $_x = 5;
   echo something_new($_x);
 echo '<br>';
 echo '<br>';
   $_arr = [0 ,3 ,5 ,7 ,9 ,11 ,13 ,15 ,17 ,19 ,21 ,23 ,25 ,27 ];

   foreach($_arr as $_z){
     echo ','. $_z;
   }
   $_dec = 1;
   for($_w = 5;$_w >=2;$_w--){
      $_dec *= $_w;
   }
   echo '<br>';
   echo '<br>';
   echo $_dec;
?>
</body>
</html>