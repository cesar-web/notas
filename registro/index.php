<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
</head>

<?php
if(isset($_POST['register'])){
    require("../servidor/conexion.php");
    $message = "";

    if($connect){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = hash('sha512',$password);

        $getUsuariosQuery = "SELECT COUNT('user-id') AS total FROM users WHERE username='$username'";
        $getUsuarios = mysqli_query($connect, $getUsuariosQuery);
        $usuarios = mysqli_fetch_assoc($getUsuarios);
        // Checks to see if username exists
        if(!$usuarios['total']){
            
            $registerUserQuery = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')";
            if(mysqli_query($connect, $registerUserQuery)){
                $message = 'Se ha registrado! <a href="../">Regresar al inicio</a><br />';
            }else{ $message = "Se produjo un error al registrar al usuario."; }
        }else{ $message = "El nombre de usuario ya existe<br /><a href='../registro/'>Volver a registrar</a>"; }
    }else{ $message = "Se produjo un error al conectarse a la base de datos."; }
    header("Location: ?mensaje=$message");
}
if(isset($_GET['mensaje'])){
?>
<body>
    <header class="menu">
        <div><a href="#"><img class="menu-logo" src="../images/logo.svg" /></a></div>
        <div><a href="../">Notas</a></div>
        <div><a href="#">Acceder</a></div>
        <div><a href="../registro/">Crear una cuenta</a></div>
    </header>

    <main class="notes"><br /><br /><br /><br />
        <div class="note-container form-container">
            <h2><?php echo $_GET['mensaje']; ?></h2>
            <div class="image">
                <img src="../images/logo.svg" />
            </div>
        </div>
    <br /><br /><br /><br />
    </main>

</body>
</html>
<?php

}
// ====================================================
// == Webpage that is shown if there is no POST data ==
// ====================================================
else{
?>
<body>
    <header class="menu">
        <div><a href="#"><img class="menu-logo" src="../images/logo.svg" /></a></div>
        <div><a href="../">Notas</a></div>
        <div><a href="#">Acceder</a></div>
        <div><a href="#">Crear una cuenta</a></div>
    </header>

    <main class="notes"><br /><br /><br /><br />
        <div class="note-container form-container">
            <h2>Crear tu cuenta de notas<hr /></h2>

            <div class="form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                Nombre:<br /><input type="text" name="username" placeholder="Nombre" /><br /><br />
                Contraseña:<br /><input type="password" name="password" placeholder="******" /><br /><br />
                <input type="submit" name="register" class="button-submit" value="Registrar!" /><br /><br />
            </form>
            </div>

            <div class="image">
                <img src="../images/logo.svg" />
            </div>
        </div>
    <br /><br /><br /><br />
    </main>

</body>
</html>
<?php } // Closes else at the start of the document ?>