<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="javascript/navbar.js"></script>
    <title>Document</title>
</head>

<body>
    <?php include 'navbar.inc.php'; ?>
    <hr>
    <h1>Welcome <?php echo $_POST["firstName"] . " " . $_POST["lastName"]; ?></h1><br>
    <h2>Your email address is: <?php echo $_POST["email"]; ?></h2><br>
    <h2>You are from: <?php echo $_POST["city"] . ", " . $_POST["country"]; ?></h2><br>
    <h2>Your password is: <?php echo $_POST["password"]; ?></h2><br>
    <hr>
</body>

</html>