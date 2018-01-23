<?php

include "includes/Classes/Account.php";

    $account = new Account();
    $account->register();

include "includes/handlers/register-handler.php";
include "includes/handlers/login-handler.php";

?>


<html>
<head>
    <title>Log in</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="post">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username: </label>
                <input id="loginUsername" name=loginUsername" placeholder="Username" required type="text">
            </p>
            <p>
                <label for="loginPassword">Password: </label>
                <input id="loginPassword" name=loginPassword" placeholder="Password" required type="password">
            </p>
            <button type="submit" name="loginButton">Login</button>
        </form>


        <form id="registerForm" action="register.php" method="post">
            <h2>Create an account</h2>
            <p>
                <label for="userName">Username: </label>
                <input id="userName" name="userName" placeholder="Username" required type="text">
            </p>
            <p>
                <label for="firstName">First Name: </label>
                <input id="firstName" name="firstName" placeholder="e.g. John" required type="text">
            </p>
            <p>
                <label for="lastName">Last Name: </label>
                <input id="lastName" name="lastName" placeholder="e.g. Johnson" required type="text">
            </p>
            <p>
                <label for="email">Email: </label>
                <input id="email" name="email" placeholder="e.g. john@gmail.com" required type="text">
            </p>

            <p>
                <label for="email">Confirm email: </label>
                <input id="email2" name="email2" required type="text">
            </p>
            <p>
                <label for="password">Password: </label>
                <input id="password" name="password" placeholder="Password" required type="password">
            </p>
            <p>
                <label for="password2">Confirm Password: </label>
                <input id="password2" name="password2" placeholder="Password" required type="password">
            </p>
            <button type="submit" name="registerButton">Sign Up!</button>
        </form>
    </div>
</body>
</html>