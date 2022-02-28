<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['faiz', 'faizur', 'rahman', 'alhakim'];
	array_push($name, 'chris');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>