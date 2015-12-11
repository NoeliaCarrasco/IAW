<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
</head>
  <script>
      $( document ).ready(function() {
            $( "#cuadro" ).dialog();
      });
  </script>
<body>       
     <?php if (!isset($_POST["usuario"])) : ?>
       <div id="cuadro" title="login">
        <form method="post">
          Usuario: 
          <input type="text" id="usuario" name="usuario">
          Contraseña: 
          <input type="password" id="contraseña" name="contraseña">
          <input type="submit" id="entrar" value="Entrar">
        </form>
        </div>
      <?php else: ?>
        <?php
            $usu = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];
            if($usu=="noelia"&&$contraseña="1234"){
                header('Location: matricula.php');
            }else{
                header('Location: login.php');
            }
        ?>
      <?php endif ?>
</body>
</html>