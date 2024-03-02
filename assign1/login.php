<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Manager Login" />
    <meta name="keywords" content="HTML, CSS, PHP" />
    <meta name="author" content="Udara Ishan" />
    <link href="manager.css" rel="stylesheet">
    <title>Manager Login</title>
</head>

<body>

<?php
// Start or resume a session
session_start();

// Check if the user is already authenticated
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    header("Location: manager.php");
    exit();
}

// Hardcoded manager credentials for demonstration purposes
$correctManagerUsername = 'manager';
$correctManagerPassword = 'mp3manager';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve entered credentials
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    // Check if username and password match
    if ($enteredUsername == $correctManagerUsername && $enteredPassword == $correctManagerPassword) {
        // Set session variable to mark user as authenticated
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $enteredUsername;

        // Redirect to the manager page
        header("Location: manager.php");
        exit();
    } else {
        // Display an error message
        echo "Invalid username or password";
    }
}
?>

    <div class="login-container">
        <h1>Manager Login</h1>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
    </div>

</body>

</html>
