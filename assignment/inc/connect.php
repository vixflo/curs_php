<?php
    // Inseram datele de conectare cu baza de date
    $conn = mysqli_connect("localhost","root","","product");
    // Daca conexiunea nu se realizeaza afisam o eroare
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
