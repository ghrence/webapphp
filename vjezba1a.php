<?php
$naslov = "Moj prvi PHP dokument";
$autor = "Gabriel Hrenčević";

echo "<h1>$naslov</h1>";
echo "<p>Ovu stranicu izradio/la je <strong>$autor</strong>.</p>";
echo '<a href="https://www.wikipedia.org" target="_blank">Posjeti Wikipediju</a>';
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $naslov; ?></title>
</head>
<body>
</body>
</html>

