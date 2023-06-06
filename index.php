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
            <input type="text" name="x" placeholder="x Wert">
            <select name="operator" id="">
                <option value="add">add</option>
                <option value="subtract">subtract</option>
                <option value="divide">divide</option>
                <option value="multiply">multiply</option>
            </select>
            <input type="text" name="y" placeholder="y Wert">
            <br>
            <input type="text" name="wurzel" placeholder="Wurzel aus">
            <br>
            <input type="text" name="arr" placeholder="addiere Zahlen">
            <br>
            <button type="submit" name="submit" value="submit">calc</button>
        </form>
    </div>

    <div id="erg">
        <h3>Ergebnis:</h3>
        <?php
        if (isset($_GET["submit"])) {
            $x = $_GET["x"];
            $y = $_GET["y"];
            $op = $_GET["operator"];

            switch ($op) {
                case "add":
                    echo $x . " + " . $y . " = <b>" . $x + $y . "</b>";
                    break;
                case "subtract":
                    echo $x . " - " . $y . " = <b>" . $x - $y . "</b>";
                    break;
                case "multiply":
                    echo $x . " x " . $y . " = <b>" . $x * $y . "</b>";
                    break;
                case "divide":
                    echo $x . " / " . $y . " = <b>" . $x / $y . "</b>";
                    break;
            }
        }
        ?>
        <p>
        </p>
    </div>

    <p>answer:
        <?php
        if (isset($_GET["submit"])) {
            $num1 = $_GET["x"];
            $num2 = $_GET["y"];
            $val = $_GET["operator"];

            switch ($val) {
                case "add":
                    echo $num1 + $num2;
                    break;
                case "subtract":
                    echo $num1 - $num2;
                    break;
                case "divide":
                    echo $num1 / $num2;
                    break;
                case "multiply":
                    echo $num1 * $num2;
                    break;
            }
        }
        ?>
    </p>
</body>

</html>