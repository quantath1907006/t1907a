<!DOCTYPE html>
<html>
<head>
	<title>Quản lý sách</title>

</head>
<body>
<?php
	$ran = mt_rand(1,100);
	$bookList = [];
	for ($i=0; $i < $ran; $i++) { 
		$book = [
		'bookName' => 'quyển sách '.($i+1),
		'authorName' => 'tác giả '.($i+1),
		'price' => mt_rand(100,10000),
		'NXB' => 'nhà xuất bản '.($i+1)

	];
	$bookList[] = $book;
	}

	
?>

<div class="container-fluid">          
  <table class="table table-dark table-striped">
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
      	for ($i=0; $i < $ran; $i++) { 
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
</div>
</body>
</html>