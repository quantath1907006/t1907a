<!DOCTYPE html>
<html>
<head>
	<title>Hiển thị N quyển sách ngẫu nhiên</title>
</head>
<body>
<?php
	$random = rand(1,100);
	$bookList = [];
	for ($i=0; $i < $random; $i++) { 
		$book = [
		'bookName' => 'Quyển sách '.($i+1),
		'authorName' => 'Tác giả '.($i+1),
		'price' => rand(100,1000),
		'NXB' => 'Nhà xuất bản '.($i+1)

	];
	$bookList[] = $book;
	}


?>
<table border="1">
    <thead>
      <tr>
        <th>Tên sách</th>
        <th>Tác Giả</th>
        <th>Giá</th>
        <th>Nhà xuất bản</th>
      </tr>
    </thead>
    <tbody>
      <?php
      	for ($i=0; $i < $random; $i++) { 
		$book1 = $bookList[$i];
		echo '<tr>'.
			'<td>'.($book1['bookName']).'</td>'.
			'<td>'.($book1['authorName']).'</td>'.
			'<td>'.($book1['price']).'</td>'.
			'<td>'.($book1['NXB']).'</td>'.
		'</tr>';
	}
      ?>
    </tbody>
  </table>
</body>
</html>