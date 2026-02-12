<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
    <aside id="lewy">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdz kwiaciarnie</a>
            <ul>
                <li>w Warszawie</li>
                <li>w Malborku</li>
                <li>w Poznaniu</li>
            </ul>
            </li>
        </ol>
    </aside>
    <aside id="prawy">
        <h2>Znajdź kwiaciarnię</h2>
        <form method="POST" action="znajdz.php">
            <label for="miasto">Podaj nazwę miasta: </label>
            <input type="text" name="miasto" id="miasto">
            <input type="submit" value="SPRAWDŹ">
        </form>
        <!-- tutaj pojawi się skrypt -->
         <?php
            $baza=mysqli_connect("localhost","root","","kwiaciarnia");
            if($baza){
                if(!empty($_POST["miasto"])){
                    // echo $_POST["miasto"];
                    $miasto=$_POST["miasto"];
                    $sql="SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto='$miasto';";
                    $zapytanie=mysqli_query($baza,$sql);
                    while($wiersz=mysqli_fetch_array($zapytanie)){
                        echo "<h3>";
                        echo $wiersz['nazwa'];
                        echo ", ";
                        echo $wiersz['ulica'];
                        echo "</h3>";
                    }

                }
                
            }else{
                echo "Błąd połączenia";
            }
            mysqli_close($baza);
         ?>
    </aside>
    <footer>
        <p>Stronę opracował: Przemek</p>
    </footer>
</body>
</html>