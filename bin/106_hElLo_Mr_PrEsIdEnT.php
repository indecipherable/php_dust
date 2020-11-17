<form method="POST" action="106_hElLo_Mr_PrEsIdEnT.php">
Your Email: <input type="text" name="email" />
<br/>
<button type="submit">Checkit a Email</button>
<?php
// Verify email
if (strcasecmp($_POST['email'], 'president@whitehouse.gov') == 0) {
  print "Welcome, Presidente!";
}
?>
</form>
