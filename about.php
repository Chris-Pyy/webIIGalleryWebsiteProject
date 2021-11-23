<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/about.css">
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
    <div class='main'>
        <div class='about'>
            <h1 class='centre'>About</h1>
            <h2 class='centre'>Taylor Amy</h2>
            <h3 class='centre'>COMP3512 Fall 2021</h3>
            <h4 class='centre'>HTML, CSS, JavaScript, PHP</h4>
            <!-- a Link to https://github.com/taylorsamy -->
            <p class='centre'>
                <a href="https://github.com/taylorsamy">https://github.com/taylorsamy</a>
            </p>
            <p class='centre'>
                <a
                    href="https://github.com/MRU-CSIS-3512-202104-001/asg-2-taylorsamy">https://github.com/MRU-CSIS-3512-202104-001/asg-2-taylorsamy</a>
            </p>
            <p class='centre'>
                This website contains CSS recipes from <a href = 'https://www.w3schools.com/howto/howto_js_topnav_responsive.asp'>here</a>,
                <a href="https://codepen.io/rkchauhan/pen/NNKgJY">here</a>, and <a href="https://codepen.io/Manu11/pen/dwYVPd">here</a>.
            </p>
            <h1 class='centre'>
                <?php
                    date_default_timezone_set('America/Edmonton');
                    echo "The time is " . date("h:i:sa");
                ?>
            </h1>
            <h1 class='centre'>
                <?php
                        $date = new DateTime('2021-12-08 21:00:00');
                        $now = new DateTime();
                        $diff = $date->diff($now);
                        echo "There are " . $diff->days . " days, " . $diff->h . " hours, " . $diff->i . " minutes, and " . $diff->s . " seconds until Milestone 3 is due!";
                    ?>
            </h1>
        </div>
    </div>


</body>

</html>