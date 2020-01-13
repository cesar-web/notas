<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
</head>
<body>
    <?php // Menus for the different user status (registered / not registered)
    if(!isset($_SESSION['user'])){ ?>
    <header class="menu">
        <div><a href="#"><img class="menu-logo" src="images/logo.svg" /></a></div>
        <div><a href="#">Notas</a></div>
        <div><a href="acceder/">Acceder</a></div>
        <div><a href="registro/">Crear una cuenta</a></div>
    </header>
    <?php 
    } else { ?>
        <header class="menu">
        <div><a href="#"><img class="menu-logo" src="images/logo.svg" /></a></div>
        <div><a href="salir.php">Salir</a></div>
    </header>
    <?php } ?>
    

    <main class="notes"><br /><br /><br /><br />
    <?php for($i = 0; $i < 10; ++$i){ ?>
        <div class="note-container">
        <div class='title'>
            <?php echo "<strong>Title #$i</strong>"; ?>
                <div class='actions'>
                    <form action="modificar"method="post">
                        <input type="submit" class="note-button-delete" name="delete" value="Eliminar" onclick="return confirm('¿Quieres eliminar &quot;<?php echo $i ?>&quot;?')" />
                        <input type="submit" class="note-button-edit" name="edit" value="Editar" />  
                    </form>
                </div>
        </div><br />
        <?php echo"<div class='description'>Description #$i  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu diam eros. In ac ullamcorper lorem. Nunc pretium auctor urna, vitae consequat lacus. Vivamus non nisi nec risus efficitur ultrices a tristique enim. Cras vitae vestibulum enim. Fusce condimentum sem malesuada nibh efficitur, non eleifend nisi mattis. In malesuada in mi non luctus. Nunc dignissim dapibus dui, venenatis euismod nunc. Nam nec malesuada ex, quis fringilla eros. Nulla enim orci, suscipit vitae erat id, sagittis iaculis turpis. Nam sit amet metus fermentum, ultricies est ultrices, consectetur turpis. Phasellus sed lobortis nisi. </div><br />"; ?>
        </div>
    <?php } // Closes for loop ?>

    <br /><br /><br /><br />
    </main>

    <?php // Footer banner to register
    if(!isset($_SESSION['user'])){ ?>
    <footer>
        Quieres guardar tus notas? <a href="registro/"><u>Registrate!</u></a>
    </footer>
    <?php } ?>
    
    <div class="add-note" id="myBtn"><img class="button-image" src="images/plus.png"/></div>


    <!-- The Modal -->
    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Some text in the Modal..</p>
    </div>

    </div>

    <script src="main.js"></script>
</body>
</html>