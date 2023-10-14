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

            <div class="input-field">
                <label for="pwd">Confirm password</label>
                <input type="password" id="pwd" name="confirm-password" placeholder="Confirm your password" required>
            </div>

        </div>
        <div class="button">
            <input type="submit" value="Register">
        </div>
    </form>
</div>
</body>
<footer>
</footer>
</html>