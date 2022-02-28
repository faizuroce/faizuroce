<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['faiz', 'faizur', ' rahman', 'alhakim'];
	array_unshift($name, 'chris', 'ken');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>