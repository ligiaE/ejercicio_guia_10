<!DOCTYPE html>
<html lang="en">
<head>
<meta  charset="utf-8">
<title>desarrollo del ejercicio 10 </title>

</head>
<body>


     <p>l ejercicio 10 toca Pedir el día, mes y año de una fecha e indicar si la fecha es correcta. Con meses de 28, 30 y 31 días. Sin años bisiestos. 
       
                        <form id="fechas" name="fechas" method="post" action="desarrollo_10.php">


            
<label>Dia:</label>
 <input id="dia" required="required" name="dia" placeholder="Ingrese dia"  onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="2" minlength="2"/>
 <br><br>
 <label>Mes:</label> 
 <input id="mes" required="required"  name="mes" placeholder="Ingrese mes"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="2" minlength="2"/><br><br>
<label>Año :</label> 
<input id="ano" required="required" name="ano" placeholder="Ingrese año" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="4" minlength="4"/><br><br>
            
<input type="submit" name="enviar" id="enviar" value="Enviar"/>
</form>
        
        </body>
</html>