<?php
    include_once("parentesis_class.php");
    $analize = $_POST['analize'];

    $scan = new Analize();

    if ($scan->analizes($analize)) {
    	$result = $scan->showName();
    	echo "<h2>Successful</h2>";
    } else {
    	echo "<h1>Exception Mismatched Parenthesis</h1>";
    }
?>