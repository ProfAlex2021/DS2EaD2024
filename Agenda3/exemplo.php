<?php
$a = $_REQUEST['a'];
if (isset($_REQUEST['b'])) {
    $b = $_REQUEST['b'];
} else {
    $b = "5";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo $a + 2; ?></p>
    <p><?php echo $a . 2; ?></p>
    <p><?php echo $b + 2; ?></p>
    <p><?php echo $b . 2; ?></p>
    <?php
    if ($a > 2) {
        // echo "<p>Variável A é maior que 2</p>"
    ?>
        <p>Variável A é maior que 2</p>
    <?php
    } elseif ($a < 2) {
    ?>
        <p>Variável A é <b>menor</b> que 2</p>
    <?php
    } else {
    ?>
        <p>Variável A é <i>igual a</i> 2</p>
    <?php
    }
    ?>
</body>

</html>