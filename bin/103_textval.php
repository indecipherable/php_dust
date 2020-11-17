
<form method="POST" action="103_textval.php">
Your Zipcode: <input type="text" name="zipcode" />
<br/>
<button type="submit">GIMME</button>
<?php
// Print what was submitted in the 'zipcode' form param
//print $_POST['zipcode'];
//
$ziptrim = trim($_POST['zipcode']);
print "ziptrim is: ";
var_dump($ziptrim);
//
$zip_len = strlen($ziptrim);
print "var_dump is: ";
var_dump($zip_len);
if ($zip_len != 5) {
  print "Wrong len zip code!";
}
if (strlen(trim($_POST['zipcode'])) != 5) {
  print "Please enter a zip code 5 letters in len";
}
?>
</form>
