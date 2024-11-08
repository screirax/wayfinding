<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>ILVA</title>

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


    <div class="col-12 col-md-4 mt-5">
        <h3 class="text-left">Du kan nu vælge fra menuen en ting som du kan sætte ind i dit rum</h3>


    </div>
<!--
    <div class="mt-5 col-12 col-md-8">
        <div class="mb-3" id="divrum" style="border: 2px solid black; background-color: #F0E5DD">
            <p class="text-center mt-3">Din Væg</p>

            <h2>Gemte mål</h2>
            <p>Højde: <span id="savedHeight"></span> cm</p>
            <p>Bredde: <span id="savedWidth"></span> cm</p>

        </div>
    </div>



    <script>

        const savedHeight = sessionStorage.getItem("height");
        const savedWidth = sessionStorage.getItem("width");


        const divrum = document.getElementById("divrum");
        const savedHeightSpan = document.getElementById("savedHeight");
        const savedWidthSpan = document.getElementById("savedWidth");

        // Check om der er gemte værdier i sessionStorage
        if (savedHeight && savedWidth) {
            // Opdater div-størrelsen
            divrum.style.height = savedHeight + "px";
            divrum.style.width = savedWidth + "px";

            // Opdater tekstindholdet i span-elementerne
            savedHeightSpan.textContent = savedHeight || "Ikke sat";
            savedWidthSpan.textContent = savedWidth || "Ikke sat";

        else
        {
            divrum.innerHTML = "<p style='color: red;'>Der er sket en fejl. Gå venligst tilbage til sidste side og prøv igen.</p>";
        }
    </script>
-->
    <div class="mt-5 col-12 col-md-8">
        <div class="mb-3" id="divrum" style="border: 2px solid black; background-color: #F0E5DD">
            <p class="text-center mt-3">Din Væg</p>


        </div>
    </div>

    <script>
        const savedHeight = sessionStorage.getItem("height");
        const savedWidth = sessionStorage.getItem("width");

        // Find div'en og span-elementerne, som skal opdateres
        const divrum = document.getElementById("divrum");
        const savedHeightSpan = document.getElementById("savedHeight");
        const savedWidthSpan = document.getElementById("savedWidth");

        // Check om der er gemte værdier i sessionStorage
        if (savedHeight && savedWidth) {
            // Opdater div-størrelsen
            divrum.style.height = savedHeight + "px";
            divrum.style.width = savedWidth + "px";

            // Opdater tekstindholdet i span-elementerne
            savedHeightSpan.textContent = savedHeight || "Ikke sat";
            savedWidthSpan.textContent = savedWidth || "Ikke sat";
        } else {
            // Hvis ingen data er gemt, vis en fejlmeddelelse på siden
            divrum.innerHTML = "<p style='color: red;'>Der er sket en fejl. Gå venligst tilbage til sidste side og prøv igen.</p>";
        }
    </script>


</div>



<?php /*
<div class="row g-2">
	<?php
	$produkter = $db->sql("SELECT * FROM produkter");
	foreach($produkter as $produkt) {
		?>
		<div class="col-12 col-md-6">
			<div class="card w-100">
				<div class="card-header">
					<?php
					echo $produkt->prodNavn;
					?>
				</div>
                <div class="card-body">
                    <?php
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($produkt->prodBillede) . '" alt="Produkt billede" style="max-width:100%; height: auto;">';
                    ?>
                </div>

				<div class="card-body">
					<?php
					// Indsæt andet felt fra database
                    echo $produkt->prodBeskrivelse;
					?>
				</div>
				<div class="card-footer text-muted">
					<?php
					// Indsæt andet felt fra database
                    echo number_format($produkt->prodPris, 2, ',', '.'). " DKK";
					?>
				</div>
			</div>
		</div>
		<?php
	}
	?>
</div>
*/?>

<?php include 'settings/buttomscripts.php';
include 'settings/footer.php';?>
</body>
</html>
