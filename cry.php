<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>at</title>
</head>
<body>
  <Form action="receive.php" method="get">
    <select class="form-select"  name="txtmensaje">
  <option selected>Seleccione su tipo de musica fav
  <option value="Dembow">Dembow</option>
  <option value="Trap">Trap</option>
  <option value="Bachata">Bachata</option></option>
</select>
<br>
<br>  <center>
<input type="text" name="txtmensaje1" placeholder="ingrese su Nombre">
    <input type="text" name="txtmensaje2" placeholder="ingrese su Apellido">
    <input type="text" name="txtmensaje3" placeholder="ingrese su Cedula">
    <input type="text" name="txtmensaje4" placeholder="ingrese su Telefono">
    <input type="text" name="txtmensaje5" placeholder="ingrese su Contraseña">
    <input type="text" name="txtmensaje6" placeholder="ingrese su Ubicacion">
  
    <div class="form-check">
  <name="txtmensaje7" placeholder="ingrese su sexo"> <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1"></label>
    Masculino 
 
  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
  femenino
  </label> 
 <br>
 <br>
    <input type="submit" name="btnenviar" value="enviar mensaje"require>
    
    </center>
</form>
</body>
</html>
