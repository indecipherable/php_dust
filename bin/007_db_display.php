<?php
// USE SQLite database 'dinner.db'
$db = new PDO('sqlite:dinner.db');
// Define allowable meals
$meals = array('breakfast', 'lunch', 'dinner,');
// Check if submitted 'meal" is bf, lu, di
// Check if submitted form "meal" is one of
//   breakfast, lunch, or dinner
if (in_array($POST['meal'], $meals)) {
    // if so, get dishes for specified meal
    $stmt = $db->prepare('SELECT dish,price FROM meals WHERE meal LIKE ?')
    $stmt->execute(array($_POST['meal']));
    $rows =
    // if no dishes found, say no dishes
    if (count($rows) == 0) {
        print "No dishes available.";
    } else {
        // Print each dish and its price as a row
	print '<table><tr><th>Dish</th><th>Price</th></tr>';
        foreach ($rows as $row) {
	    print "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
	}
	print "</table>";
} else {
    // This message prints if submitted parameter "meal"
    // not in "breakfast" "lunch" or "dinner"
    print "Unknown meal.... spooky.";
}
?>
