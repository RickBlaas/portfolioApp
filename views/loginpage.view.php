<?php
//$fileName = 'personinfo.json';
//
//
//if (isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['password'])) {
//    file_put_contents($fileName, json_encode($_POST));
//}
//
//if(file_exists($fileName)) {
//    $array= json_decode(file_get_contents($fileName), true);
//    foreach($array as $value) {
//        echo $value?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/registerstyle.css"/>
    <meta charset="UTF-8">
    <title>Login/Register</title>
</head>

<body>

<div class="container">

    <form method="post">
        <div class="form-info">
            <div class="title">Register</div>
            <div class="input-field">
                <label for="firstname">First name</label>
                <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" required>
            </div>

            <div class="input-field">
                <label for="lastname">Last name</label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required>
            </div>

            <div class="input-field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>

            <div class="input-field">
                <label for="email">Email adress</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-field">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="password" placeholder="Enter your password" required>
            </div>
        </div>
        <div class="button">
            <button type="submit">Register</button>
        </div>
    </form>
</div>

<div class="container">

    <form method="post">
        <div class="form-info">
            <div class="title">Login</div>

            <div class="input-field">
                <label for="email">Email adress</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-field">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="password" placeholder="Enter your password" required>
            </div>
        </div>

        <div class="button">
            <button type="submit">Login</button>
        </div>
    </form>
</div>


</body>
<footer>

</footer>
</html>