<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="javascript/navbar.js"></script>
    <title>Document</title>
</head>

<body>
    <?php include 'navbar.inc.php'; ?>
    <div class='main hero'>
        <div class='container'>
            <button class='btn signup'>Sign Up</button>
            <button class='btn login'>Login</button>

            <div class="search search-bar">
                <input type="text" class="input" placeholder="&nbsp;">
                <span class="label">Search for photos</span>
                <span class="highlight"></span>
                <div class="search-btn">
                    <i class="fa fa-search icon"></i>
                </div>
            </div>
        </div>
    </div>


</body>

</html>