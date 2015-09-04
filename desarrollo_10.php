<?php
		 if (isset($_POST['dia'])&&($_POST['mes'])&&($_POST['ano'])){ 
    $d = $_POST['dia'];
    $m = $_POST['mes'];
    $a = $_POST['ano'];
	
		 if((($_POST['dia']>0) && ($_POST['dia']<=28))&&($_POST['mes']==2))			    {
		 echo "Fecha ingresada Correctamente <br> ".$d."/".$m. "/".$a;
	}
	else if((($_POST['dia']>0) && ($_POST['dia']<=30))&&($_POST['mes']==4)||($_POST['mes']==6)||($_POST['mes']==9)||($_POST['mes']==11))			    {
		 echo "Fecha ingresada Correctamente <br> ".$d."/".$m. "/".$a;
	}
	else if((($_POST['dia']>0) && ($_POST['dia']<=30))&&($_POST['mes']==4)||($_POST['mes']==6)||($_POST['mes']==9)||($_POST['mes']==11))			    {
		 echo "Fecha ingresada Correctamente <br> ".$d."/".$m. "/".$a;
	}
	else if((($_POST['dia']>0) && ($_POST['dia']<=31))&&($_POST['mes']==1)||($_POST['mes']==3)||($_POST['mes']==5)||($_POST['mes']==7)||($_POST['mes']==8)||($_POST['mes']==10)||($_POST['mes']==12))			    {
		 echo "Fecha correcta es <br> ".$d."/".$m. "/".$a;
	}
	else echo "La fecha ingresada no  es valida";
}
    
    
?>