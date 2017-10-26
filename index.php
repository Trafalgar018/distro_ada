<?php
    include_once 'config.php';
    include_once 'connectdb.php';

    $queryResult = $pdo->query("SELECT * from distro");
?>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Distro App</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/app.css">
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
            <a class="navbar-brand" href="#">DistroADA</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="add.php">Añadir Distro</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <h1>Linux Power</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Os Type</th>
            <th>Version</th>
            <th>Web</th>
            <th>Borrar</th>
            <th>Detalles</th>
        </tr>
        </thead>
        <tbody>
        <?php while( $row = $queryResult->fetch(PDO::FETCH_ASSOC) ): ?>
            <tr>
                <td><?=$row['name']?></td>
                <td><?=$row['ostype']?></td>
                <td><?=$row['version']?></td>
                <td><?=$row['main_page']?></td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?=$row['id']?>">
                        <button type="submit"><span class="glyphicon glyphicon-trash borrar" aria-hidden="true"></span></button>
                    </form>
                </td>
                <td>
                    <form action="details.php" method="post">
                        <input type="hidden" name="id" value="<?=$row['id']?>">
                        <button type="submit"><span class="glyphicon glyphicon-plus-sign detalles" aria-hidden="true"></span></button>
                    </form>
                </td>

            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div><!-- /.container -->
</body>
</html>
