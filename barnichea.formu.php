<!doctype html>
<html>
<header>
<meta chasert="utf-8">  
<title>Formulario</title> 
<link rel="stylesheet" type="text/css" href="formu_estilo.css">
</header>
<body>
<section id="formulario">
 <div id="formu">
    <h3>Formulario</h3>
    <h5>Los campos con (*) son requeridos obligatoriamente</h5>
    
    <form method="POST" action="consultas.php" >
     <input type="text" name="nombre" placeholder="*Nombre" required maxlength="20">
    <input type="text" name="apellido" placeholder="*apellido" require maxlength="30">
    <input type="text" name="telefono" placeholder="*telefono" require maxlength="10">
    <input type="email" name="correo" placeholder="*Correo Electronico" >    
    <textarea name="consulta" placeholder="Escriba almenos 10 caracteres" rows="5" required minlength="10" ></textarea>
    <input type="submit" value="Enviar Consulta" > <input type="reset">
        </form> 
        </div>  
</section>        
<?php 

if (isset ($_GET['ok'])) {
    echo "<h5>Su Consulta Fue Enviada Con Exito</h5>";
}
?>

</body>
</html>
