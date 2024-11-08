<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Test</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Vælg Væg
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Nord Væg</a></li>
        <li><a class="dropdown-item" href="#">Syd Væg</a></li>
        <li><a class="dropdown-item" href="#">Øst Væg</a></li>
        <li><a class="dropdown-item" href="#">Vest Væg</a></li>
    </ul>
</div>

<!-- Bootstrap JS, Popper.js included -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>