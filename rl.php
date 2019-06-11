<html>
    <head>
        <title>
            libro
        </title>
        <body>
            <?php
                $n=$_POST["libro"];
                $a=$_POST["autor"];
                $e=$_POST["editorial"];
                if(!$conectar=mysqli_connect("localhost","root","","biblioteca"))
                echo"<h1>No se conecto a la BD</h1>";
                else{
                    $sql="Setnames 'utf8'";
                    mysqli_query($conectar,$sql);
                    $sql="insert into libro(id_libro, libro, autor, editorial) values (null,'$n','$a','$e')";
                    mysqli_query($conectar,$sql);
                    echo"<h1>El libro $n se a registrado </h1>";
                }
            ?>
            <a href="registro.html">Ir a la pagina principal</a><br>
        </body>
    </head>
</html>