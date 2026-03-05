<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Wycieczki po Europie
    </title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <header>
        <h1>BIURO TURYSTYCZNE</h1>
    </header>
    <section id="dane">
        <h3>Wycieszki, na które są wolne miejsca</h3>
        <ul>
            <!-- tutaj pojawi się skrypt -->
             <?php
                $polaczenie=mysqli_connect("localhost","root","","biuro");
                if($polaczenie){
                    $sql="SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna=1;";
                    $wynik=mysqli_query($polaczenie,$sql);
                    while($wiersz=mysqli_fetch_array($wynik)){
                        echo "<li>";
                        echo $wiersz["id"];
                        echo ". dnia";
                        echo $wiersz["dataWyjazdu"];
                        echo " jedziemy do ";
                        echo $wiersz["cel"];
                        echo ", cena: ";
                        echo $wiersz["cena"];
                        echo "</li>";
                    }
                }
                mysqli_close($polaczenie);
             ?>
            
        </ul>
    </section>
    <section id="lewy">
        <h2>Bestselery</h2>
        <table>
            <tr>
                <td>Wenecja</td>
                <td>kwiecień</td>
            </tr>
            <tr>
                <td>Londyn</td>
                <td>lipiec</td>
            </tr>
            <tr>
                <td>Rzym</td>
                <td>wrzesień</td>
            </tr>
        </table>
    </section>
    <section id="srodkowy">
        <h2>Nasze zdjęcia</h2>
        <!-- tutaj pojawi się skrypt 2 -->
         <?php
            $polaczenie=mysqli_connect("localhost","root","","biuro");
            if($polaczenie){
                $sql="SELECT nazwaPliku,podpis FROM zdjecia ORDER BY podpis DESC;";
                $zapytanie=mysqli_query($polaczenie,$sql);
                while($wiersz=mysqli_fetch_array($zapytanie)){
                    echo "<img src='".$wiersz["nazwaPliku"]."' alt='".$wiersz["podpis"]."'>";
                }
            }
            // <img src='zdjecie.jpg' alt='tekst alternatywny'>
            mysqli_close($polaczenie);
         ?>
    </section>
    <section id="prawy">
        <h2>Skontaktuj się</h2>
        <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
        <p>telefon: 11222333</p>
    </section>
    <footer>
        <p>Stronę wykonał Przemek</p>
    </footer>

</body>
</html>