<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <hr>
    <h1>Welcome <?php echo $_POST["firstName"] . " " . $_POST["lastName"]; ?></h1><br>
    <h2>Your email address is: <?php echo $_POST["email"]; ?></h2><br>
    <h2>You are from: <?php echo $_POST["city"] . ", " . $_POST["country"]; ?></h2><br>
    <h2>Your password is: <?php echo $_POST["password"]; ?></h2><br>
    <hr>
</body>

</html>