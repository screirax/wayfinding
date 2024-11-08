<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <?php include 'settings/links.php'?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include 'settings/headertop.php';?>

<div class="container-fluid">
    <?php include 'settings/header.php';
    include 'settings/menu.php'?>
</div>

<div class="container col-12 col-md-12 d-flex flex-column flex-md-row justify-content-between mt-1 bg-body-tertiary">

    <div class="col-12 col-md-6 mt-5">
        <h2 class="text-left">Vælg en væg og skriv dine mål</h2>
        
        <div class="input-group mb-3 w-50 mt-4">
            <span class="input-group-text" id="basic-addon1">Højde</span>
            <input type="text" class="form-control" placeholder="Centimeter" aria-label="height" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3 w-50 mt-4">
            <span class="input-group-text" id="basic-addon1">Bredde</span>
            <input type="text" class="form-control" placeholder="Centimeter" aria-label="width" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="mt-5 col-12 col-md-6">
        <img class="img-fluid" src="pictures/aabning-nr40.webp">
    </div>

</div>


</body>
<?php include 'settings/buttomscripts.php';
include 'settings/footer.php';?>
</html>