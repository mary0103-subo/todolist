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
  <form action="validacion.php" method="post">
  <h2><em>Formulario de Registro</em></h2>  
     
     
  <label for="email">Email <span><em>(requerido)</em></span></label>
      <input type="email" name="email" class="form-input" />

 <label for="password">Contraseña <span><em>(requerido)</em></span></label>
<input type="password" name="password" class="form-input" required/>        
      
     <center> <input class="form-btn" name="submit" type="submit" value="nuevo registro" /></center>
    
  </form>
</div>
</body>
</html>