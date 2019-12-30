<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <header class="menu">
        <div><a href="#">Logo</a></div>
        <div><a href="#">Notas</a></div>
        <div><a href="#">Acceder</a></div>
        <div><a href="#">Crear una cuenta</a></div>
    </header>

    <main class="notes"><br /><br /><br /><br />
    <?php
    for($i = 0; $i < 10; ++$i){
        echo '<div class="note-container">';
        echo "<div class='title'>
                <strong>Title #$i</strong>
                    <div class='actions'>
                        Delete &nbsp;&nbsp;&nbsp; Edit
                    </div>
            </div><br />
            <div class='description'>Description #$i  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu diam eros. In ac ullamcorper lorem. Nunc pretium auctor urna, vitae consequat lacus. Vivamus non nisi nec risus efficitur ultrices a tristique enim. Cras vitae vestibulum enim. Fusce condimentum sem malesuada nibh efficitur, non eleifend nisi mattis. In malesuada in mi non luctus. Nunc dignissim dapibus dui, venenatis euismod nunc. Nam nec malesuada ex, quis fringilla eros. Nulla enim orci, suscipit vitae erat id, sagittis iaculis turpis. Nam sit amet metus fermentum, ultricies est ultrices, consectetur turpis. Phasellus sed lobortis nisi. </div><br />
            </div>";
    }
    ?>
    <br /><br />
    </main>

    <div class="add-note"><img class="button-image" src="images/plus.png"/></div>
</body>
</html>