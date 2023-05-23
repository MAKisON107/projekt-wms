<?php
include_once('functions.php');
include_once('database.php');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?> - Posty</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <?php
    printNavbar();
    ?>
    <main class="container mt-5">
        <h2>Posty</h2>
        <?php
        $posts = getAllPosts();
        if(count($posts) == 0){
            ?>
            <p>Brak Postów</p>
            <?php
        } else {
            foreach($posts as $a) {
                ?>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title"><?=$a['title']?></h5>
                        <h6 class="card-subtible mb-2 text-muted"><?=$a['categoryName']?></h6>
                        <p class="card-link"><a href="post.php?id=<?=$a['id']?>"target="_blank">Więcej</a></p>

                    </div>
                </div>
                <?php
            }
        }
        ?>
    </main>
    <script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>