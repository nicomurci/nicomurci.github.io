<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['age']) >= 1 &&  strlen($_POST['gender']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
		$age = trim($_POST['age']);
		$gender = trim($_POST['gender']);
	    $email = trim($_POST['email']);

	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, edad, genero, email, fecha_reg) VALUES ('$name','$age','$gender','$email','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>