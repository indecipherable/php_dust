<html><head><title>sayhelloself</title></head>
<body>
<?php
// Print a greeting if the form was submitted
if ($_POST['user']) {
    print "Hello, ";
    // print what was submitted in form 'user' parameter
    print $_POST['user'];
    print "!";
} else {
    // otherwise, print the form
    print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Name: <input type="text" name="user" />
<br/>
<button type="submit">Say Hello</button>
</form>
_HTML_;
?>
</body>
</html>
