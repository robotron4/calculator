<?php
function process()
{
    if (isset($_GET["submit"])) {

        $x = $_GET["x"];
        $y = $_GET["y"];
        $op = $_GET["operator"];
        function formatNum($val)
        {
            return number_format($val, 0, ",", ".");
        }

        if (isset($_GET["x"]) && $x != null && isset($_GET["y"]) && $y != null) {
            switch ($op) {
                case "add":
                    echo formatNum($x) . " + " . formatNum($y) . " = <b>" . formatNum($x + $y) . "</b>";
                    break;
                case "subtract":
                    echo formatNum($x) . " - " . formatNum($y) . " = <b>" . formatNum($x - $y) . "</b>";
                    break;
                case "multiply":
                    echo formatNum($x) . " x " . formatNum($y) . " = <b>" . formatNum($x * $y) . "</b>";
                    break;
                case "divide":
                    echo formatNum($x) . " / " . formatNum($y) . " = <b>" . formatNum($x / $y) . "</b>";
                    break;
            }
        }
        if (isset($_GET["wurzel"]) && $_GET["wurzel"] != null) {
            $w = floatval($_GET["wurzel"]);
            echo " <br> Wurzel aus " . formatNum($w) . " = <b>" . number_format(sqrt($w), 4, ",", ".") . "</b><br>";
        }
        if (isset($_GET["arr"]) && $_GET["arr"] != null) {
            $nums = $_GET["arr"];
            $numArr = explode(",", $nums);
            $sum = 0;
            foreach ($numArr as $n) {
                $sum += intval($n);
            }
            echo "Summe ist = <b>" . formatNum($sum) . "</b>";
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
        $_GET["arr"] = null;
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
