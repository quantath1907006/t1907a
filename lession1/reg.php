<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="" methos="GET">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="passwork" placeholder="Enter password" id="pwd">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Register</button>
        </form>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Passwork</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php if(isset($_GET["username"])){
    echo $_GET["username"];
          } ?></td>
                    <td><?php if(isset($_GET["email"])){
    echo $_GET["email"];
} ?></td>
                    <td><?php if(isset($_GET["passwork"])){
    echo $_GET["passwork"];
} ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>