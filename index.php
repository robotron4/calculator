<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>

<body>
    <?php include 'processGetData.php';
    ?>
    <h1>Calculator</h1>
    <div id='main'>
        <div id="calc">
            <form action="">
                <input type="text" name="x" placeholder="x Wert" value="<?php getVal("x") ?>">
                <select name="operator" id="">
                    <option value="add">add</option>
                    <option value="subtract">subtract</option>
                    <option value="divide">divide</option>
                    <option value="multiply">multiply</option>
                </select>
                <input type="text" name="y" placeholder="y Wert" value="<?php getVal("y") ?>">
                <br>
                <input type="text" name="wurzel" placeholder="Wurzel aus" value="<?php getWurzel() ?>">
                <br>
                <input type="text" name="arr" placeholder="addiere Zahlen" value="<?php [getArr()] ?>">
                <br>
                <button type="submit" name="submit" value="submit">calc</button>
                <button type="submit" name="delete">werte löschen</button>
            </form>
        </div>

        <div id="erg">
            <h3>result:</h3>
            <?php
            process();
            ?>
        </div>
    </div>

</body>

</html>