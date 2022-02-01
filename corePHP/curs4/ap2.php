<!DOCTYPE html>
<html lang="en">

<head>

<?php include "html/head.html" ?>
    <title>Document</title>

</head>

    <body>

<?php include "html/header.html"; ?>

            <main>
                <h2>Bine ati venit ! </h2>
                <?php require "books/book.php"; ?>
                <?php

                // echo "<pre>";
                // print_r($books);

                // foreach ($books as $k => $b) {
                //    echo $b['title'];
                //    echo "<br>";
                //    echo $b['author'];
                //    echo "<br>";
                //    echo "<br>";
                // }

                ?>
                
                <?php foreach ($books as $k => $b) :?>

                    <h1>Titlu carte: <?php echo $b['title'];?></h1>
                    <p>Autorul este: <?php echo $b['author']; ?></p>
                    <p><?php echo $b['country']; ?></p>
                    <img src="<?php echo $b['imageLink']; ?>" alt="<?php echo $b['title'];?>">
                    <p> Limba: <?php echo $b['language'];?></p>
                    <p> Link : <?php echo $b['link'];?></p>

                <?php endforeach;?>


            </main>

<?php include "html/footer.html" ?>
    </body>

</html>