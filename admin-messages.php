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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <?php
    printNavbar();
    ?>
    <main class="container mt-5">
        <h2>Wiadomości</h2>
        <table class="table table-striped table-reponsive">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Imię i Nazwisko</th>
                    <th>Treść</th>
                    <th>Data</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $messages = getAllMessages();
                foreach($messages as $a) {
                    ?>
                    <tr>
                        <td><?=$a['id']?></td>
                        <td><?=$a['email']?></td>
                        <td><?=$a['firstName']?></td>
                        <td><?=$a['content']?></td>
                        <td><?=$a['createdAt']?></td>
                        <td>
                            <a class="btn btn-outline-danger" href="admin-delete-message.php?id=<?=$a['id']?>">
                               <i class="bi bi-trash"></i>
                            </a>
                        </td>
                       
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