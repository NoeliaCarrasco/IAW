<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
    <?php
 
 $nombre=["roberto","juan","marta","moria","martin","jorge","miriam","nahuel","mirta"];
 
 $nombre1=[];


 for ($i=0;$i<sizeof($nombre);$i++){

        $array=$nombre[$i];
        
        $array=substr($array,0,1);
     
     if ($array=="m"){
         
        array_push($nombre1,$nombre[$i]);
         
     }
     
 } 

for ($i=0;$i<sizeof($nombre1);$i++){
    
    echo $nombre1[$i]."<br>";
}
    
  
    ?>
    
</body>
</html>