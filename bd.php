<html>
    <head>
        <title>
            lista libro
        </title>
        <link rel="stylesheet" href="registro.css">
    </head>
    <body>
        <h1>Lista de libros</h1>
        <table border=1>
            <tr>
                <th>id_libro</th>
                <th>nombre</th>
                <th>autor</th>
                <th>editoria</th>
            </tr>
            <?php
                if(!$conectar=mysqli_connect("localhost","root","","biblioteca"))
                echo"<h1>No se conecto a la BD</h1>";
                else{
                    $sql="Setnames 'utf8'";
                    $sql="select * from libro";
                    $resultado=mysqli_query($conectar,$sql);
                    while($mostrar=mysqli_fetch_array($resultado)){?>
                        <tr>
                            <td><?php echo$mostrar['id_libro']?></td>
                            <td><?php echo$mostrar['libro']?></td>
                            <td><?php echo$mostrar['autor']?></td>
                            <td><?php echo$mostrar['editorial']?></td>
                        </tr>
                        <?php
                        }
                    }
                ?>
        </table>
        <a href="registro.html">Ir a la pagina principal</a><br>
    </body>
</html>