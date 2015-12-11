<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>


</head>
<body>
    <div>
       <?php if (!isset($_POST["asignatura"])) : ?>
          <div class="card-panel teal lighten-1 center white-text"><h3>Matricula</h3></div>
       <div class="row">
           <form method="post">
           <fieldset>
            <legend>Información Personal</legend>
            <table>
                <tr>
                    <td>DNI: <input type="text" maxlength ="9" name="DNI" required></td>
                    <td>Nombre: <input type="text" name="nombre" required> </td>
                </tr>
                <tr>
                    <td>Apellidos: <input type="text" name="apellidos" required> </td>
                    <td>Direccion: <input type="text" name="direccion" required></td>
                </tr>
                <tr>
                    <td>Telefono: <input maxlength ="9" type="text" name="telefono" required></td>
                    <td>Email: <input type="email" name="email" required> </td>
                </tr>
            </table>
            </fieldset>
            <fieldset>
            <legend>Curso</legend>
            
              <p>

          <select name="tipocurso" required>
            <option value="" disabled selected>Seleccione un curso</option>
            <option value="1ASIR">1º ASIR</option>
            <option value="2ASIR">2º ASIR</option>
          </select>
            <br>
            </fieldset>
            <fieldset>
            <legend>Asignaturas</legend>
            <table>
                <tr>
                    <td>
                        <input type="checkbox" name="asignatura[]" id="asig1" value="Empresa">
                        <label for="asig1" >Empresa</label>
                    </td>
                    <td>
                        <input type="checkbox" name="asignatura[]" id="asig2" value="Sistemas">
                        <label for="asig2" >SO</label>
                    </td>
                    <td>
                        <input type="checkbox" name="asignatura[]" id="asig3" value="Redes">
                        <label for="asig3" >Redes</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="asignatura[]" id="asig4" value="Web">
                        <label for="asig4" >Web</label>
                    </td>
                    <td>
                        <input type="checkbox" name="asignatura[]" id="asig5" value="Seguridad">
                        <label for="asig5" >Seguridad</label>
                    </td>
                    
                    <td>
                    
                     <input type="checkbox" name="asignatura[]" id="asig6" value="BBDD">
                        <label for="asig6" >Bbdd</label>
                    
                    </td>
                </tr>
            </table>
            </fieldset>
            <fieldset>
            <legend>Beca</legend>
            <p>
                <input class="with-gap" name="beca" value="Si" type="radio" id="beca1" checked />
                <label for="beca1">Si solicita</label>
                <input class="with-gap" name="beca" value="No" type="radio" id="beca2"/>
                <label for="beca2">No solicita</label>
            </p>
            </fieldset>
            <input type="submit" name="envia" value="ENVIAR" onclick="if(!this.form.asig1.checked && !this.form.asig2.checked && !this.form.asig3.checked && !this.form.asig4.checked && !this.form.asig5.checked && !this.form.asig6.checked){alert('No ha seleccionado ninguna asignatura');}" class="waves-effect waves-light btn">
       
        <?php else: ?>
        <div class="card-panel teal lighten-1 accent-4 center white-text"><h3>Datos de la Matricula</h3></div>
        <div class="card-panel white row">
           
        <?php
            $dni=$_POST['DNI'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellidos'];
            $direccion=$_POST['direccion'];
            $telefono=$_POST['telefono'];
            $correo=$_POST['email'];
            $curso=$_POST['tipocurso'];
            $asignatura= $_POST['asignatura'];
            $beca= $_POST['beca'];
             
             echo "<fieldset><legend>Datos del alumno</legend><table style='width:500px;'><tr><td style='font-weight:bold;'>DNI: </td><td>$dni</td>
                    <td style='font-weight:bold;'>Nombre: </td><td>$nombre</td></tr>
                    <tr><td style='font-weight:bold;'>Apellidos: </td><td>$apellido</td>
                    <td style='font-weight:bold;'>Direccion: </td><td>$direccion</td></tr>
                    <tr><td style='font-weight:bold;'>Telefono:</td><td>$telefono</td>
                    <td style='font-weight:bold;'>Email: </td><td>$correo</td></tr>
                    <tr><td style='font-weight:bold;'>Curso: </td><td>$curso</td><td style='font-weight:bold;'>Beca: </td>            <td>$beca</td></tr><tr><td style='font-weight:bold;'>Asignaturas: </td><td>";

            
            for($i=0;$i<sizeof($asignatura);$i++){
               
                    echo $asignatura[$i]."<br>";
                
            }
            echo "</td></tr></table></fieldset>";
        ?>

      <?php endif ?>
      </div>
      </div>
    </div>
</body>
</html>