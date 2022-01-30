<html>
    <head></head>

<body>

    <?php 
        $dado = rand(1,6);

        echo $dado;

        switch($dado){

            case 1:
                echo "<img src='Dice-1-b.svg'>";
                break;
            case 2:
                echo "<img src='Dice-2-b.svg'>";
                break;
            case 3:
                echo "<img src='Dice-3-b.svg'>";
                break;
            case 4:
                echo "<img src='Dice-4-b.svg'>";
                break;
            case 5:
                echo "<img src='Dice-5-b.svg'>";
                break;
            case 6:
                echo "<img src='Dice-6-b.svg'>";
                break;
        }
    ?>

</body>
</html>