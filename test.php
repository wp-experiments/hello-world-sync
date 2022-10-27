<?php

// ok:test
echo 'yolo';

// ruleid:test
$a = $_GET['id'];
echo $a;

// ok:test
$b = $_GET['id'];
echo (intval) $b;

// ok:test
$c = $_GET['id'];
echo "asd".$c."asd";

// ok:test
$d = $_GET['id'];
echo "ABC".(int) $d."XYZ";

// ruleid:test
echo "ABC".$_GET['i']."XYZ";

// ok:test
echo "ABC".(int)$_GET['i']."XYZ";

?>
