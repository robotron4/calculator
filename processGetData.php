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
            echo " <br> Wurzel aus " . number_format($w, 0, ",", ".") . " = <b>" . number_format(sqrt($w), 4, ",", ".") . "</b><br>";
        }
        if (isset($_GET["arr"])) {
            $nums = $_GET["arr"];
            $numArr = explode(",", $nums);
            $sum = 0;
            foreach ($numArr as $n) {
                $sum += intval($n);
            }
            echo "Summe ist = <b>" . number_format($sum, 0, ",", ".") . "</b>";
        }
    }
}

function getVal($v)
{
    if (isset($_GET[$v])) {
        echo htmlspecialchars($_GET[$v]);
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

if (array_key_exists('delete', $_GET)) {
    deleteNum();
}

function deleteNum()
{
    if (isset($_GET['delete'])) {
        $_GET["x"] = null;
        $_GET['y'] = null;
        $_GET['wurzel'] = null;
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
