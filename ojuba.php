<?php
/*
Ojuba Software Repos Mirror Generator 2.0
By Mosaab Alzoubi
Under WAQFv2 License
1438-3-18
*/

$mirror = array(
	'https://copr-be.cloud.fedoraproject.org/results/moceap/Ojuba/'
);
$name = $_GET['name'];
$ver = $_GET['ver'];
$arch = $_GET['arch'];
$repo = $name."-".$ver."-".$arch;

foreach ($mirror as &$i) {
	echo $i.$repo."/"."\n";
}
?>
