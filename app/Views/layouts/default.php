<! doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
            maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?= base_url('/js/jquery-3.7.1.min.js') ?>"></script>
    <script src="<?= base_url('/js/script.js') ?>"></script>
</head>
<body>

<header class="bg-dark text-white py-3">
    <div class="container">
        <h1 class="text-center">Abstract Article</h1>
    </div>
</header>

<?= $this->view; ?>


<div id="modal">

</div>
<div id="modal_g"></div>

<footer class="bg-light text-center py-3">
    <p>&copy; 2024 Abstract Article</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
