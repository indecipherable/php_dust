
<form method="POST" action="105_hello_mr_president.php">
Your Email: <input type="text" name="email" />
<br/>
<button type="submit">CheckaChecka 'da Email</button>
<?php
// Verify email
if ($_POST['email'] == 'president@whitehouse.gov') {
  print "Welcome, Presidente!";
}
?>
</form>

