<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="group">
  <form action="validacion.php" method="POST">
  <h2><em>Formulario de Registro</em></h2>  
     
      <label >email <span><em>(requerido)</em></span></label>
      <input type="text" name="email" class="form-input" required/>   
      
      <label >contraseña <span><em>(requerido)</em></span></label>
      <input type="text" name="contraseña" class="form-input" required/>         
      
     <center> <input class="form-btn" name="submit" type="submit" value="nuevo registro" /></center>
    
  </form>
</div>
</body>
</html>