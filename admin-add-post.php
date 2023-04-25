<?php
include_once('functions.php');
include_once('database.php');
$categories = getAllCategories();
addPost();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
</head>
<body>
    <?php
    printNavbar();
    ?>
    <main class="container mt-5">
        <h2>Nowy post</h2>
        <form method="post">
            <?=printFormField('title','Tytuł','text')?>
            <?=printSelect('categoryId','Kategoria',$categories)?>
            <?=printTextarea('content','Treść')?>
            <input type="submit" class="btn btn-outline-primary" value="Dodaj!">
        </form>
    </main>
    <script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>