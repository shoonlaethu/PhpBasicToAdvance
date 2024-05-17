<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals with Regular Expressions</title>
</head>
<body>
    <h2>Superglobals with Regular Expressions</h2>

<?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from form fields using $_POST
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Regular expression pattern for validating email address
        $email_pattern = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";

        // Regular expression pattern for validating password
        $password_pattern = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()-_+=]).{8,}$/";

        // Perform pattern matching to validate email address
        if (preg_match($email_pattern, $email)) {
            echo "Valid email address: $email<br>";
        } else {
            echo "Invalid email address!<br>";
        }

        // Perform pattern matching to validate password
        if (preg_match($password_pattern, $password)) {
            echo "Valid password: $password<br>";
        } else {
            echo "Invalid password!<br>";
        }
    }

    // Check if cookie is set
    if (isset($_COOKIE["username"])) {
        echo "Welcome back, " . $_COOKIE["username"] . "!<br>";
    }

    // Check if session is set
    session_start();
    if (isset($_SESSION["counter"])) {
        $_SESSION["counter"]++;
    } else {
        $_SESSION["counter"] = 1;
    }
    echo "Session counter: " . $_SESSION["counter"] . "<br>";

    // Retrieve data from query string using $_GET
    if (isset($_GET["search"])) {
        $search_query = $_GET["search"];
        echo "Search query: $search_query<br>";
    }

    // Accessing global variable using $GLOBALS
    $x = 10;
    function access_global_variable() {
        echo "Accessing global variable using \$GLOBALS: " . $GLOBALS["x"] . "<br>";
    }
    access_global_variable();
?>

    <h3>Registration Form</h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Submit</button>
    </form>

    <h3>Search Form</h3>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="search">Search:</label>
        <input type="text" id="search" name="search">
        <button type="submit">Search</button>
    </form>
</body>
</html>
