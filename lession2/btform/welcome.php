<?php
    $username = $password = $email = '';
    if (isset($_GET['name']) && isset($_GET['password']) && isset($_GET['email'])){
        $username = $_GET ['name'];
        $password = $_GET ['password'];
        $email = $_GET['email'];
    }
    // if (isset($_GET['password'])){
    //  $password = $_GET ['password'];
    // }

?>
<!DOCTYPE html>
<html>
<head>
    <title>hiajf</title>
</head>
<body>
    <div>
        <table  cellspacing="5" cellpadding="5" border="1px">
            <tr>
                <th>Ten tai khoan</th>
                <th><?=$username?></th>
            </tr>
            <tr>
                <th>Email</th>
                <th><?=$email?></th>
            </tr>
            <tr>
                <th>Mat khau</th>
                <th><?=$password?><a href="input.php" style="color: red">Edit</a></th>
            </tr>
            
            
        </table>
    </div>
</body>
</html>