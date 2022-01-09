<!DOCTYPE html>
<html lang="en">

<head>

<?php include "html/head.html" ?>
    <title>Document</title>

</head>

    <body>

<?php include "html/header.html"; ?>
<?php include('books/book.php');?>
        <div style="padding-top: 50px;"></div>
        <div class="container">
            <div class="row">
<?php foreach ($books as $book):?>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 mt-2 ">
                    <div class="card ">
                        <img class="card-img-top"  style="height:500px" src="<?php echo $book['imageLink'];?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $book['title'];?></h4>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $book['author'];?>, <?php echo $book['country'];?></h6>
                            <p class="card-text">Language : <?php echo $book['language'];?>; Pages:<?php echo $book['pages'];?>; Year: <?php echo $book['year'];?></p>
                            <a href="<?php echo $book['link'];?>" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
<?php endforeach;?>
            </div>
        </div>


<?php include "html/footer.html" ?>
    </body>

</html>