<?php
    if(isset($_GET['ref'])){
        $page = $_GET['ref'];
    }
        $page = "dashboard";
        require "./form/header.php";
        require "./form/$page.php";
        require "./form/footer.php";
?>