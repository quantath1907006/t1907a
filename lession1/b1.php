<!DOCTYPE html>
<html>
<head>
	<title>Thong tin SV</title>
</head>
<style>
	table,th,td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		th,td {
			padding: 15px;
		}
</style>
<body>
	<?php
	$Name = 'Tran Anh Quan';
	$Age = '19';
	$Address = 'Ha Tinh';
	$Email = 'quantath1907006@fpt.edu.vn';
	$SDT = '0915741732';
	?>
<table>
	<tr>
		<th>Name</th>
		<th>Age</th>
		<th>Address</th>
		<th>Email</th>
		<th>SDT</th>
	</tr>
	<tr>
		<td><?=$Name?></td>
		<td><?=$Age?></td>
		<td><?=$Address?></td>
		<td><?=$Email?></td>
		<td><?=$SDT?></td>
	</tr>
</table>

</body>
</html>