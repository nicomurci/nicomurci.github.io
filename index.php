<!DOCTYPE html>
<html>
<head>
	<title>EXPERIMENTO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="DALTO.css">
	<link rel="stylesheet" href="cinco.css">
</head>
<body>
    <form method="post">
    	<h1>GRUPO DE CONTROL</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
		<input type="text" name="age" placeholder="Edad">
		<input type="text" name="gender" placeholder="Genero (M-F)">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>

<button class="boton cinco" onclick="location.href='index.html'">
			<div class="icono">
				
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
					
					<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
					
				</svg>
				
			</div>
			<span>CONTINUAR</span>
		</button>


</body>
</html>