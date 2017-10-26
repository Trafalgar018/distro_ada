<?php
include_once 'config.php';
include_once 'connectdb.php';


//Cogemos el id de la distro a mostrar

$id = $_REQUEST['id'];

//realizamos la consulta sql

$queryResult = $pdo->prepare("SELECT * from distro WHERE id = :id");
$queryResult->execute([
    'id' => $id
]);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Distro App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="app.css"
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">DistroADA</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="add.php">Añadir distro</a></li>
                <li class="active"><a href="#">Detalles</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<?php while( $row = $queryResult->fetch(PDO::FETCH_ASSOC) ): ?>
    <div class="container">
        <br>
        <br>
        <h1><u><?=$row['name']?></u></h1>
        <div class="col-md-3">
            <aside>
                <h2>Imagen:</h2>
                <p><?=$row['image']?></p>
            </aside>
        </div>
        <div class="col-md-6" id="principal">
            <article>
                <div><strong>Tipo SO:</strong> <?=$row['ostype']?></p></div>
                <div><strong>Basado en:</strong> <?=$row['based']?></p></div>
                <div><strong>Pais:</strong> <?=$row['origin']?></p></div>
                <div><strong>Arquitectura:</strong> <?=$row['arch']?></p></div>
                <div><strong>Escritorio:</strong> <?=$row['desktop']?></p></div>
                <div><strong>Categoria:</strong> <?=$row['category']?></p></div>
                <div><strong>Estado:</strong> <?=$row['status']?></p></div>
            </article>
        </div>
        <div class="col-md-3" id="principal">
            <article>
                <div><strong>Version actual:</strong> <?=$row['version']?></p></div>
                <div><strong>Pagina web:</strong> <?=$row['web']?></p></div>
                <div><strong>Pagina con la documentacion:</strong> <?=$row['doc']?></p></div>
                <div><strong>Foro:</strong> <?=$row['forum']?></p></div>
                <div><strong>Pagina sobre errores:</strong> <?=$row['error']?></p></div>
            </article>
        </div><br>
    </div><br>
    <div class="container"><strong>Descripcion:</strong> <?=$row['description']?></div>
<?php endwhile; ?>
</body>
</html>
