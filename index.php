<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>

<body>
    <h2>Calculator</h2>
    <div id="calc">
        <form action="">
            <input type="text" name="x" placeholder="x Wert" value="<?php echo htmlspecialchars($_GET['x']); ?>">
            <select name="operator" id="">
                <option value="add">add</option>
                <option value="subtract">subtract</option>
                <option value="divide">divide</option>
                <option value="multiply">multiply</option>
            </select>
            <input type="text" name="y" placeholder="y Wert" value="<?php echo htmlspecialchars($_GET['y']); ?>">
            <br>
            <input type="text" name="wurzel" placeholder="Wurzel aus" value="<?php echo htmlspecialchars($_GET['wurzel']); ?>">
            <br>
            <input type="text" name="arr" placeholder="addiere Zahlen">
            <br>
            <button type="submit" name="submit" value="submit">calc</button>
            <button type="submit" name="löschen">werte löschen</button>
        </form>
    </div>

    <div id="erg">
        <h3>Ergebnis:</h3>
        <?php
        require "processGetData.php";
        if (isset($_GET["submit"])) {
            process($x, $y, $op, $w);
        }
        ?>
    </div>

</body>

</html>