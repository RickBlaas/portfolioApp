<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<form>
    <!--  hier heb ik een form gemaakt om de gebruiker een account aan te laten maken.
    Er staat bij elke input required zodat de gebruiker niet belangrijke informatie weg kan laten.
      ook heb ik gebruik gemaakt van placeholders om de gebruiker een voorbeeld te geven en de juiste kant op te sturen. -->
    <table>
        <tr>
            <td> First name:</td>
            <td><input type="text" name="fname" placeholder="First name" required></td>
        </tr>
        <tr>
            <td> Last name:</td>
            <td><input type="text" name="lname" placeholder="Last name" required></td>
        </tr>
        <tr>
            <td> Password:</td>
            <td><input type="password" name="passw" placeholder="password" required></td>
        </tr>
        <tr>
            <td> Email adress:</td>
            <td><input type="email" name="email" placeholder="example@example.com" required></td>
        </tr>
        <tr>
            <!-- Bij de input van het telefoon nummer verplicht ik de gebruiker om een bepaalt aantal nummers te gebruiken zodat het een geldig telefoon nummer is.  -->
            <td> Phone number:</td>
            <td><input type="tel" name="phone" placeholder="06-23456789" pattern="[0-9]{2}-[0-9]{8}" required></td>
        </tr>
        <!-- hier laat ik de gebruiker een bestand selecteren, om die vervolgens te laten gebruiken als profiel foto. -->
        <tr>
            <td> Submit a profile picture:</td>
            <td><input type="file" name="profilepicture" required></td>
        </tr>
        <tr>
            <!-- Als laatst de button om het account te registreren. -->
            <td> Upload your profile here:</td>
            <td><input type="submit" value="Register account"></td>
        </tr>
    </table>
</form>