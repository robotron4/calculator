<?php
function process()
{
    if (isset($_GET["submit"])) {

        $x = $_GET["x"];
        $y = $_GET["y"];
        $op = $_GET["operator"];

        switch ($op) {
            case "add":
                echo number_format($x, 0, ",", ".") . " + " . number_format($y, 0, ",", ".") . " = <b>" . number_format($x + $y, 0, ",", ".") . "</b>";
                break;
            case "subtract":
                echo number_format($x, 0, ",", ".") . " - " . number_format($y, 0, ",", ".") . " = <b>" . number_format($x - $y, 0, ",", ".") . "</b>";
                break;
            case "multiply":
                echo number_format($x, 0, ",", ".") . " x " . number_format($y, 0, ",", ".") . " = <b>" . number_format($x * $y, 0, ",", ".") . "</b>";
                break;
            case "divide":
                echo number_format($x, 0, ",", ".") . " / " . number_format($y, 0, ",", ".") . " = <b>" . number_format($x / $y, 4, ",", ".") . "</b>";
                break;
        }
        if (isset($_GET["wurzel"])) {
            $w = floatval($_GET["wurzel"]);
            echo " <br> Wurzel aus " . number_format($w, 0, ",", ".") . " = <b>" . number_format(sqrt($w), 4, ",", ".") . "</b>";
        }
    }
}

function getX()
{
    if (isset($_GET["x"])) {
        echo htmlspecialchars($_GET['x']);
    } else {
        echo "";
    }
}

function getY()
{
    if (isset($_GET["y"])) {
        echo htmlspecialchars($_GET["y"]);
    } else {
        echo "";
    }
}

function getWurzel()
{
    if (isset($_GET["wurzel"])) {
        echo htmlspecialchars($_GET["wurzel"]);
    }
}

function getArr()
{
    if (isset($_GET["arr"])) {
        echo htmlspecialchars($_GET["arr"]);
    } else {
        echo "";
    }
}
