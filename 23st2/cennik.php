<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>

    </header>
    <section id="lewy">

    </section>
    <section id="srodkowy">
        <a href="cennik.php">CENNIK</a>
        <!-- tutaj ma być skrypt -->
        <table>
        <?php
            $polacznie=mysqli_connect("localhost","root","","wynajem");
            if($polacznie){
                echo "wszystko dziala";
            }else{
                echo "błąd połączenia";
            }
        ?>
        </table>
    </section>
    <section id="prawy">

    </section>
    <footer>
        
    </footer>
    
</body>
</html>