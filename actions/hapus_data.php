<?php
require __DIR__ . "../../functions/functions.php";
if (isset($_GET['id'])) {
    if (deleteData($_GET['id'])) {
        header('location:../show_data.php');
    }
}
