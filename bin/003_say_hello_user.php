<form method="POST" action="003_say_hello_user.php">
Your Name: <input type="text" name="user" />
<br/>
<button type="submit">Say Hello</button>
<?php
print "Hello, ";
// Print what was submitted in the 'user' form param
print $_POST['user'];
print "!";
?>
</form>
