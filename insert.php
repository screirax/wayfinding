<?php
require "settings/init.php";

if(!empty($_POST["data"])){
    $data=$_POST["data"];
    $sql = "INSERT INTO produkter (prodNavn, prodBeskrivelse, prodPris) VALUES (:prodNavn, :prodBeskrivelse, :prodPris)";

    $bind = [
            ":prodNavn" => $data["prodNavn"],
            ":prodBeskrivelse" => $data["prodBeskrivelse"],
            ":prodPris" => $data["prodPris"]

    ];

    $db->sql($sql, $bind, false);


    echo "Produktet er ny indsat <a href='insert.php'> Indsæt et produkt mere</a>";

    exit;

}

?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container">
    <form action="insert.php" method="post" >
        <div class="row g-3">
            <div class="col-12 col-md-6 mt-4">
                <label for="prodNavn" class="form-label">Produkt Navn</label>
                <input type="text" class="form-control" id="prodNavn" name="data[prodNavn]" placeholder="Produkt Navn">
            </div>
            <div class="col-12 col-md-6 mt-4">
                <label for="prodPris" class="form-label">Produkt Pris</label>
                <input type="number" step="0.01" class="form-control" id="prodPris" name="data[prodPris]" placeholder="Produkt Pris">
            </div>
        </div>

        <div class="col-12 mt-4">
            <label for="prodBeskrivelse" class="form-label">Produkt Beskrivelse</label>
            <textarea class="form-control" id="prodBeskrivelse" name="data[prodBeskrivelse]" placeholder="Produkt Beskrivelse"></textarea>
        </div>

        <div class="col-12 col-md-4 offset-md-8 mt-4">
            <button type="submit" class="btn btn-primary w-100">Send Data</button>

        </div>

    </form>
</div>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
