<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ENDEVINA EL NOMBRE</h1>
        <?php
        session_start();
        function formulari() {
            echo "<form method='POST'>";
            echo "<input type= 'number' name= 'endevina'>";
            echo "<input type= 'submit' value= 'ENDEVIINA'>";
            echo "</form>";
        }
            if (!isset($_POST['endevina'])){
                formulari();
            }else{
                $_SESSION['intents']++;
                array_push($_SESSION['numeros'],$_POST['endevina']);
                if ($_POST['endevina']===$_SESSION['ocult']){
                    echo "<h3>Felicitats, has endivinat el numero!</h3>";
                    echo "<a href='ex41pagina1.php'>TORNAR A L'INICI</a>";
                } elseif ($_POST['endevina']<$_SESSION['ocult']){
                    echo "<h3>El número que esteu buscant és major</h3>";
                    formulari();
                } elseif ($_POST['endevina']>$_SESSION['ocult']){
                    echo "<h3>El número que esteu buscant és menor</h3>";
                    formulari();
                }
            }
            if ($_POST['endevina']!=$_SESSION['ocult']){
                echo "<h3> NUMERO D'INTENTS= ",$_SESSION['intents'],"</h3>";

                foreach ($_SESSION['numeros'] as $numerro) {
                    if($numerro<$_SESSION['ocult']){
                        $tipo=">";
                    }
                    elseif($numerro>$_SESSION['ocult']){
                        $tipo="<";
                    }
                    echo $numerro,$tipo,"<br/>";
                }
            }
        ?>

</body>
</html>