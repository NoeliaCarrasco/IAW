<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
    <?php
 
 $numeros=[0,9,20,4,1,70,65,80,3,14];
 $numayor=0;

 for ($i=0;$i<sizeof($numeros);$i++){

    if($numayor < $numeros[$i]){
        
        $numayor=$numeros[$i];
        
    }
     
    }
     
     echo $numayor;
  
    ?>
    
</body>
</html>