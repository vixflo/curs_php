<?php

function db_connect(){
    // Definim conexiunea ca variabilă statică, pentru a evita conectarea de mai multe ori.

static $connection;

    // Încercăm să ne conectăm la baza de date, si verificam dacă nu a fost stabilită o altă conexiune
 
if (!isset($connection)) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phones";

$connection = mysqli_connect($host,$username,$password,$dbname);    

}    
    // Dacă conexiunea nu a reușit, vom afisa o eroare de conexiune.
if ($connection === false) {
    // Codul de eroare
    return mysqli_connect_error();
}
    // Dacă conexiunea a reușit, vom returna datele de conexiune.
return $connection;

}

function db_query($query){
    $connection = db_connect();
    $result = mysqli_query($connection,$query);
    return $result;
}
$result = db_query("SELECT * FROM mobile_phones");

if ($result === false) {
    // Codul de eroare
    die("Query error!");
} else {
    // Vom afisa toate randurile intr-un Array
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
}

function db_select($query){
    $rows = array();
    $result = db_query($query);
    // Daca interogarea query esueaza returnam valoarea falsa

    if($result === false){
        return false;
    }

    // Daca interogarea query este reusita vom returna toate randurile intr-un array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//*******************************************************************

$rows = db_select("SELECT * FROM mobile_phones");
if ($rows === false) {
    # code...
    die("Error.");

} else {
    foreach ($rows as $row) {
        foreach ($row as $key => $value) {
            echo ucfirst($key) . ": " . $value . "<br>";
        }
        echo "-------------------------------------<br>";
    }
}


?>