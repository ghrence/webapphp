<?php

$title = "Da Vincijev kod";
$text = $title . " je kriminalistički triler američkog pisca Dana Browna.";
$link = "https://hr.wikipedia.org/wiki/Da_Vincijev_kod";

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>PHP web aplikacije</title>
    <meta name="description" content="<?php echo $text; ?>">
    <meta name="keywords" content="<?php echo $title; ?>, knjiga, Dan Brown, triler">
    <meta name="author" content="Gabriel Hrenčević">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>

    <p><?php echo $text; ?></p>

    <p>Više o knjizi na <a href="<?php echo $link; ?>" target="_blank">poveznici</a></p>

    <!-- Ime dokumenta: index.php -->
</body>
</html>
