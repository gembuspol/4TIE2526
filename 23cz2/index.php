<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hurtownia z najlepszymi cenami</h1>
    </header>
    <section id="lewy">
    <h2>Nasze ceny</h2>    
    <!-- tutaj skrypt wypisujący tabele wykonany sanodzielnie -->
     <table>
        <?php
            $conn=mysqli_connect("localhost","root","","sklep");
            if($conn){
                $query="SELECT nazwa,cena FROM towary LIMIT 4";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>";
                            echo $row["nazwa"];
                        echo "</td>";
                        echo "<td>";
                            echo $row["cena"];
                        echo "</td>";
                    echo "</tr>";
                }
                mysqli_close($conn);
            }else{
                echo "Brak połączenia";
            }
        ?>
     </table>
    </section>
    <section id="srodkowy">
        <h2>Koszt zakupów</h2>
        <form action="index.php" method="POST">
            <label>wybierz artykuł: </label>
            <select name="towary">
                <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                <option value="Zeszyt 32 kartek">Zeszyt 32 kartek</option>
                <option value="Cyrkiel">Cyrkiel</option>
                <option value="Linijka 30 cm">Linijka 30 cm</option>
            </select>
            <br>
            <label>liczba sztuk: </label>
            <input type="number" name="liczba">
            <br>
            <input type="submit" value="OBLICZ">
        </form>
        <!-- tutaj pojawi się skrypt 2 -->
    </section>
    <section id="prawy">
        
    </section>
    <footer>
    
    </footer>
</body>
</html>