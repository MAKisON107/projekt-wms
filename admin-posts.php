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
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
</head>
<body>
    <?php
    printNavbar();
    ?>
    <main class="container mt-5">
        <h2>Posty</h2>
        <table class="table table-default">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tytuł</th>
                    <th>Kategoria</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5">
                        <a href="admin-add-post.php" class="btn btn-outline-dark col-12">Nowy post</a>
                    </td>
                </tr>
                <?php
                $posts = getAllPosts();
                foreach($posts as $a) {
                    ?>
                    <tr>
                        <td><?=$a['id']?></td>
                        <td><?=$a['title']?></td>
                        <td><?=$a['categoryName']?></td>
                        <td><i class="bi bi-link"></i></td>
                        <td><i class="bi bi-trash"></i></td>
                       
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </main>
    <script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>