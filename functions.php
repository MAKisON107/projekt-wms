<?php
include('config.php');
function printNavbar() {
    global $nrSpotkania, $title;
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><?=$title?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Strona Główna</a></li>
            <a class="nav-link" aria-current="page" href="posts.php">Posty</a></li>
        </ul>
        </div>
    </div>
    </nav>
    <?php
}