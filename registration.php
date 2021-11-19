<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javascript/form-validate.js"></script>
    <title>Register</title>
</head>

<body>
    <form name="myForm" action="/asg-2-teamz-asg2_team2/action_page.php" method="POST" onsubmit="return validateForm()">

        <h1>Register</h1>
        <hr>

        <label for="firstName"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="firstName" id="firstName">

        <label for="lastName"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lastName" id="lastName">

        <label for="city"><b>City</b></label>
        <input type="text" placeholder="Enter City" name="city" id="city">

        <label for="country"><b>Country</b></label>
        <input type="text" placeholder="Enter Country" name="country" id="country">

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email">

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password">

        <label for="password-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="password-repeat" id="password-repeat">
        <hr>
        <button type="submit" class="registerbtn">Register</button>
    </form>
</body>

</html>