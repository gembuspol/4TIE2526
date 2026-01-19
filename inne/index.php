<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // połączenie z baza danych

        $polaczenie=mysqli_connect("localhost",???????,"AlamaKota67+","serwis4tie2526");

        
            if($polaczenie){
                echo "dziala";
                $dzialanie=mysqli_query($polaczenie,'INSERT INTO klient VALUES(NULL,"Igor","Zygan","882738545",NULL)');
                $wynik=mysqli_query($polaczenie,'SELECT imie,nazwisko FROM klient');
                while($wiersz=mysqli_fetch_array($wynik)){
                    echo "Imię: ".$wiersz["imie"];
                    echo "Nazwisko: ".$wiersz["nazwisko"];
                    echo "<br>";
                }

            }else{
                echo "brak polaczenia";
            }
        mysqli_close($polaczenie);

    ?>
    
</body>
</html>