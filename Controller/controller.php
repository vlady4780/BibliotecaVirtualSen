<?php

    require_once("../Model/model.php");
    $book = new library();

    $data = $book->get_Books();

    require_once("../View/home.php");


?>