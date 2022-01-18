 -- Crearea datelor in baza de date--
/*
     Toate modificările și căutările datelor din bază se realizează cu ajutorul comenzilor SQL corespunzătoare, care sunt transmise bazei.
   În continuare, îi vom trimite serverului MySQL două comenzi. Una pentru crearea bazei de date și alta pentru crearea tabelului. Rezultatul va fi o bază sau un tabel de date.
1. Primul pas este, desigur, crearea conexiunii. Facem acest lucru cu funcția mysqli_connect. De exemplu:

    $conn = mysqli_connect("localhost","root","");

2. Aceasta interogare va crea o baza de date "first_php_test_db", iar ca urmare, iar linia de comanda va arăta așa:

    mysqli_query($conn,"CREATE DATABASE first_php_test_db");

3. În continuare, cu ajutorul interogării SQL vom crea un tabel în baza de date, iar crearea acestuia va fi foarte asemănătoare cu tabelul din linia anterioară:

    mysqli_select_db($conn,"first_php_test_db");
    mysqli_query($conn,"CREATE TABLE mytable (id int primary key auto_increment, username varchar(50))");

4. Apoi, tot cu ajutorul interogării și a funcției mysqli_query introducem date în tabel. Vor fi trei nume: Peter, Sally și John.

    mysqli_query($conn,"INSERT INTO mytable values(null,'Peter'),(null,'Sally'),(null,'John')");

5.  În final, vom întrerupe conexiunea la baza de date folosind funcția mysqli_close:

    mysqli_close($conn);

*/
-- De Exemplu: --
/*
    $conn = mysqli_connect("localhost","root","");
    mysqli_query($conn,"CREATE DATABASE first_php_test_db"); 
    mysqli_select_db($conn,"first_php_test_db");
    mysqli_query($conn,"CREATE TABLE mytable (id int primary key auto_increment, username varchar(50))"); 
    mysqli_query($conn,"INSERT INTO mytable values(null,'Peter'),(null,'Sally'),(null,'John')"); 
    mysqli_close($conn);
*/