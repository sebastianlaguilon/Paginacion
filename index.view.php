<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Paginacion</title>
</head>

<body>
    <div class="contenedor">
        <h1>Frases</h1>
        <section class="articulos">
            <ul>
                <?php foreach ($articulos as $articulo) :  ?>
                    <li><?php echo $articulo['id'] . '.-' . $articulo['articulo']  ?></li>
                <?php endforeach ?>
            </ul>
        </section>
        <section class="paginacion">
            <ul>
                <!-- Establece cuando el boton anterior esta desabilitado-->
                <?php if ($pagina == 1) : ?>
                    <li class="disabled">&laquo;</li>
                <?php else : ?>
                    <li><a href="?pagina=<?php echo $pagina - 1  ?>"> &laquo; </a></li>
                <?php endif; ?>
                <!-- Se ejecuta el ciclo para mostrar las paginas
                <?php
                for ($i = 1; $i <= $numeroPaginas; $i++) {
                    if ($pagina == $i) {
                        echo "<li class='active' ><a href='?pagina=$i'> $i </a></li>";
                    } else {
                        echo "<li><a href='?pagina=$i'>$i</a></li>";
                    }
                }
                ?>
                <!--Establece cuando el boton siguiente esta desabilitado-->
                <?php if ($pagina == $numeroPaginas) : ?>
                    <li class="disabled">&raquo;</li>
                <?php else : ?>
                    <li><a href="?pagina=<?php echo $pagina + 1  ?>"> &raquo; </a></li>
                <?php endif; ?>
            </ul>
        </section>
    </div>
</body>

</html>