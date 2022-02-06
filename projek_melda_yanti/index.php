<?php
require_once("backend/config/config.php");
$page = $_GET['p'] ?? null;
$act = $_GET['a'] ?? "index";
$p = "$page/$act";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="frontend/library/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="frontend/style/style.css">
</head>
<body>
    <script src="frontend/library/jquery/jquery-3.6.0.min.js"></script>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="<?= BASEURL;?>">Poliklinik ABC</a>
        </div>
    </nav>

    <!-- Main -->
    <div class="main">
        <div class="container py-3">
        <?php
            if(is_null($page)){
                include_once("menu.php");
            }else{
                if(file_exists("$p.php")){
                    include_once("$p.php");
                }else{
                    include_once("404page.php");
                }
            }
        ?>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer bg-dark p-2">
        <p class="text-secondary text-center">Melda Yanti</p>
    </div>
    
    <script src="frontend/library/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>