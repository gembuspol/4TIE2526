<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gry komputerowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Ranking gier komputerowych</h1>
    </header>
    <aside id="lewy">
        <h3>Top 5 gier w tym miesiacu</h3>
        <ul>
            <!-- tutaj pojawi się skrypt 1-->
             <?php
                $polaczenie=mysqli_connect("localhost","root","","gry");
                $sql="SELECT nazwa, punkty FROM gry ORDER BY punkty DESC LIMIT 5;";
                $wynik=mysqli_query($polaczenie,$sql);
                while($wiersz=mysqli_fetch_array($wynik)){
                    echo "<li>";
                    echo $wiersz["nazwa"];
                    echo " ";
                    echo "<span class='punkty'>";
                    echo $wiersz["punkty"];
                    echo "</span>";
                    echo "</li>";
                }
                mysqli_close($polaczenie);
             ?>
        </ul>
        <h3>Nasz sklep</h3>
        <a href="http://sklep.gry.pl">Tu kupisz gry</a>
        <h3>Stronę wykonał</h3>
        <p>Przemek</p>
    </aside>
    <main>
        <!-- Tutaj pojawi się skrypt 2 -->
    </main>
    <aside id="prawy">
        <h3>Dodaj nową grę</h3>
        <form action="gry.php" method="POST">
            <label for="nazwa">nazwa</label><br>
            <input type="text" id="nazwa" name="nazwa"><br>
            <label for="opis">opis</label><br>
            <input type="text" id="opis" name="opis"><br>
            <label for="cena">cena</label><br>
            <input type="text" id="cena" name="cena"><br>
            <label for="zdjecie">zdjęcie</label><br>
            <input type="text" id="zdjecie" name="zdjecie"><br>
            <input type="submit" value="DODAJ">

        </form>
    </aside>
    <footer>
        <form action="gry.php" method="POST">
            <input type="text" name="pokazOpis">
            <input type="submit" value="Pokaż opis">
            <!-- efekt działania skryptu 3 -->
        </form>
    </footer>
</body>
</html>