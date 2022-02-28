<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['faiz', 'faizur', 'rahman', 'alhakim'];
	array_shift($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>