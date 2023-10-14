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
            <input type="submit" value="Login">
        </div>
    </form>
</div>
</body>
<footer>
</footer>
</html>