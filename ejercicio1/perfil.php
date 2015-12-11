<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alumnos.css">
    <title></title>
</head>

<body>
    
    <div class="highlight">
    <div id="texto">
        
<?php

$alumno=[array("DNI"=>"12345678G","Nombre"=>"Noelia","Apellido"=>"Carrasco",
                "Direccion"=>"Sevilla","telefono"=>"2345167","Correo"=>"noeliacarrasco@gmail.es"),
array("DNI"=>"28457525F","Nombre"=>"Pepe","Apellido"=>"Martinez",
                "Direccion"=>"Malaga","telefono"=>"9837645","Correo"=>"pepemartinez@gmail.es"),
array("DNI"=>"34567892H","Nombre"=>"Carla","Apellido"=>"Longares",
                "Direccion"=>"Cordoba","telefono"=>"9876543","Correo"=>"carlalongares@gmail.es"),
array("DNI"=>"67891234R","Nombre"=>"Luis","Apellido"=>"Gonzalez",
                "Direccion"=>"Sevilla","telefono"=>"4563728","Correo"=>"LuisGonzalez@gmail.es"),
array("DNI"=>"44358871J","Nombre"=>"Bianca","Apellido"=>"Marin",
                "Direccion"=>"Granada","telefono"=>"2544587","Correo"=>"Biancamarin@gmail.es"),
array("DNI"=>"55298573L","Nombre"=>"Laura","Apellido"=>"Ridao",
                "Direccion"=>"Huelva","telefono"=>"6583324","Correo"=>"Lauraridao@gmail.es"),
array("DNI"=>"32456780D","Nombre"=>"Maria","Apellido"=>"Cordero",
                "Direccion"=>"Cadiz","telefono"=>"3456710","Correo"=>"mariaCordero@gmail.es"),
array("DNI"=>"43567812K","Nombre"=>"Sonia","Apellido"=>"Salazar",
                "Direccion"=>"Jaen","telefono"=>"8664473","Correo"=>"SoniaSalazar@gmail.es"),
array("DNI"=>"77562323N","Nombre"=>"Juan","Apellido"=>"Mendez",
                "Direccion"=>"Almeria","telefono"=>"4333578","Correo"=>"JuanMendez@gmail.es"),
array("DNI"=>"49559746M","Nombre"=>"Lorena","Apellido"=>"Mellado",
                "Direccion"=>"Granada","telefono"=>"9469357","Correo"=>"LorenaMellado@gmail.es")];

$id=$_GET["id"];

$alumnos=$alumno[$id];
 $nombre=$alumnos["Nombre"];
 $apellido=$alumnos["Apellido"];
 $dni=$alumnos["DNI"];
 $correo=$alumnos["Correo"];
 $telefono=$alumnos["telefono"];
 $direccion=$alumnos["Direccion"];


echo "<img src='imagenes//$id.PNG' width=170 height=300/></div>";
echo "<div id='informacion'>";
       echo "<br><b><h2>".$nombre." ".$apellido."</h2></b>";
       echo "<p>Estudiante del IES Triana: Grado superior de Administracion de redes y aplicaciones web</p>";
       echo "<h4>Informacion personal</h4>";
       echo "<table style='height:90px;text-align:left'>
       <tr><th id='dos'>DNI: </th><td>$dni</td></tr>
       <tr><th id='tres'>Dirección: </th><td>$direccion</td></tr>
       <tr><th id='cuatro'>Teléfono: </th><td>$telefono</td></tr>
       <tr><th id='cinco'>Email: </th><td>$correo</td></tr>
       </table><br></div>";

?>
    </div>
</body>
</html>
