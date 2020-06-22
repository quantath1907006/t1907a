<!DOCTYPE html>
<html>
<head>
	<title>Star</title>
</head>
<body>
<?php
	$i = 0;
	do {
	    echo "<br>";
	    $j = (4 - $i);
	    do {
	        echo "*";
	        $j++;
	    } while ( $j < 5 );
	    $i++;
	} while ( $i < 5 );
?>
</body>
</html>