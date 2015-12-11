<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
   
    
    <?php
    
    $nombres=["San cristobal","Cucuta","Maracaibo","Caracas"];
    

    echo "numero elementos ".sizeof($nombres)."<br>";

    for ($i=0;$i<sizeof($nombres);$i++){

        echo "ciudad ".$i."<br>"."<br>"."<h2>".$nombres[$i]."</h2>"."<br>"."<br>";
     
} 

 
    


    ?>
  
</body>
</html>