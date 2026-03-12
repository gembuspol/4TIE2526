<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header id="baner1"><h1>Organizer: SIERPIEŃ</h1></header>
    <header id="baner2">
        <form method="POST" action="organizer.php" >
            <label for="fname">Nazwa wydarzenia</label><br>
            <input type="text" name="fname" id="fname">
            <input type="submit" value="OK">
        </form>
    </header>
    <header id="baner3">
        <img src="logo2.png" alt="Sierpien" width='200px' height='150px'>
        <br>
    </header>
    <main>
        <?php
            $polaczenie=mysqli_connect("localhost","root","","kalendarz");
            if(isset($_POST["fname"])){
                $wpis=$_POST["fname"];
                $sql="UPDATE zadania SET wpis='".$wpis."' WHERE dataZadania='2020-08-09';";
                $zapytanie=mysqli_query($polaczenie,$sql);
            }
            $sql1="SELECT dataZadania,wpis FROM zadania WHERE miesiac='sierpien';";
            $zapytanie=mysqli_query($polaczenie,$sql1);
            while($wiersz=mysqli_fetch_array($zapytanie)){
                echo "<section class='kalendarz'>";
                echo "<h5>";
                echo $wiersz['dataZadania'];
                echo "</h5>";
                echo "<p>";
                echo $wiersz["wpis"];
                echo "</p>";
                echo "</section>";
            }
            mysqli_close($polaczenie);
        ?>
    </main>
    <footer><p>Strone wykonał: marcin M </p>    </footer>
</body>
</html>