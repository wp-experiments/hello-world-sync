<?php 

$activeTab = $_GET['tab'];

echo intval($activeTab);

$car = $_POST['asd'];
echo $car;


$car1 = $_POST['asd'];
echo esc_js($car1);

$car2 = esc_js($_POST['asd']);
echo $car2;

$car3 = $_POST['asd'];
echo "Abc";
echo $car3;


$car4 = absint($_POST['asd']);
echo $car;


?>
