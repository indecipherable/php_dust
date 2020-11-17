<form method="POST" action="108_zeropad.php">
<?php
$zip = '5432';
$month = 2;
$day = 6;
$year = 2019;

printf("ZIP is %05d and the date is %02d/%02d/%d", $zip, $month, $day, $year);
?>
