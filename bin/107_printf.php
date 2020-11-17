<form method="POST" action="107_printf.php">
<?php
$price = 5; $tax = 0.075;
printf('The dish costs $%.2f', $price * (1 + $tax));
?>
<form>
