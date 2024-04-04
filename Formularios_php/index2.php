<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css.css">
    </head>

    <body>
        <div
            class="container"
        >

        <?php

        $nombre = $email = $comentario = $website = $opcion = $certificado = "" ;

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = test_input($_POST["nombre"]);
            $email = test_input($_POST["email"]);
            $comentario = test_input($_POST["comentario"]);
            $website = test_input($_POST["website"]);
            $opcion = test_input($_POST["opcion"]);
            $certificado = "CERTIFICADO";
        }
        
        
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;


        }
        
        ?>

        <h1 style="text-align: center; color: brown;">FORMULARIO</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nombre <input type="text" name="nombre">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        website: <input type="text" name="website">
        <br><br>
        Comentario: <textarea name="comentario" id="" cols="40" rows="5"></textarea>
        <br><br>
        Estudios realizados:
        <br>
        <input type="radio" name="opcion" value="bachiller" Required>bachiller
        <br>
        <input type="radio" name="opcion" value="supeior" Required>superior
        <br>
        <input type="radio" name="opcion" value="doctorado" Required>doctorado
        <br><br>
        <input type="submit" name="submit" value="Enviar"
        >

        </form>

    
        <?php

        echo '<h1 style="text-align: center; color: brown;">' . $certificado . '</h1>'; 
        echo $nombre . '<br>';
        echo $email . '<br>';
        echo $website . '<br>';
        echo $comentario . '<br>';
        echo $opcion . '<br>';
        
        
        ?>
            
        





        </div>
        
       
    
    
    
    
    
    
    
    
    <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
