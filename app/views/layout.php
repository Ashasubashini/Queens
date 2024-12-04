<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/queens/public/js/main.js" defer></script>
    <link rel="stylesheet" href="/queens/public/css/output.css">
    <link rel="stylesheet" href="/queens/public/css/main.css">
    <title><?= $title; ?></title>
</head>

<body>

    <?php $serverUri = explode("/", str_replace("?", "/", $_SERVER["REQUEST_URI"])); ?>

    <?php require_once "../app/views/components/navbar.php"; ?>
    <div class="my-20">
        <?php require_once '../app/views/' . $viewPath . '.php'; ?>

    </div>
    <?php require_once "../app/views/components/footer.php"; ?>

</body>

</html>