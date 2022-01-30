<html>
    <head></head>

<body>
<p> Nota:</p>
    <?php

        $nota = rand(0,10);
       
    echo  $nota;

        if($nota >= 0 && $nota <= 4){

            echo '<p>Insuficiente: ' . $nota . '</p>'; 

        } else if($nota == 5){

            echo '<p>Suficiente: ' . $nota . '</p>'; 

        }else if($nota == 6){

            echo '<p>Bien: ' . $nota . '</p>'; 

        }else if($nota == 7 or $nota == 8){

            echo '<p>Notable: ' . $nota . '</p>'; 

        }else if($nota == 9 or $nota == 10){

            echo '<p>Sobresaliente: ' . $nota . '</p>'; 

        }

    ?>

</body>    

</html>