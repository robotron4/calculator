<?php
function process($x, $y, $op, $w)
{
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
        if (isset($_GET["wurzel"])) {
            $w = $_GET["wurzel"];
            echo " <br> Wurzel aus " . $w . " = <b>" . sqrt($w) . "</b>";
        }
    }
}
