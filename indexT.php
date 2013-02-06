
<?php


// Find what path are we on.
// Do this by $_GET var; should tell us where to go.


// www.phonebook.com/?path=view&pid=3



include_once 'logic.php';
if ($_GET['path'] == 'search') {
	
	include_once 'actions.php';
	search_something('one', 'five', "hello");
}



$body = '<a href="something">go </a>';

?>



<!DOCTYPE >
<html>
	<head>
		<?php print $head; ?>
	</head>
	<body>
		<?php print $body; ?>
	</body>

</html>
