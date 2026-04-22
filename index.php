<?php
require_once 'data.php';
require_once 'functions.php';
require_once 'components.php';

$subscribe_message = handleSubscribe();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= e($site_name) ?></title>

    <style>
        body { font-family: Arial; }
        .doctor-card { width: 200px; display:inline-block; margin:10px; }
        img { width:100%; }
    </style>
</head>
<body>

<h1><?= e($site_name) ?></h1>

<?php renderDoctors($doctors); ?>

<script>
function moveCarousel(dir){
    console.log("move", dir);
}
</script>

</body>
</html>