 <!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
    <?php
 
    $numle=["2222222X"=>"Pepe","3333333X"=>"Manuel","4444444X"=>"Jose","5555555X"=>"Rosa"];
    $numlet=["2222222X"=>"Perez","3333333X"=>"Jimenez","4444444X"=>"Martinez","5555555X"=>"Rodriguez"];

      echo "<table border='1'>";

    
 foreach ($numle as $k=>$v){

      echo "<tr>";
     
    echo "<td>".$k."</td>";
     echo "<td>".$v."</td>";
     echo "<td>".$numlet[$k]."</td>";
   
      echo "</tr>";  

}
    
  
    ?>
    
</body>
</html>