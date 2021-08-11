<?php

// Initialize the session
// if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
 //session_start();
// }

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: user-dashboard.php");
    exit;
}

// Include config file
include("/xampp/htdocs/hatch/app/con_db.php");

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor ingresa tu nombre de usuario.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor ingresa tu contraseña.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, password, id_rol FROM users WHERE username = ? ";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $id_rol);


                    if (mysqli_stmt_fetch($stmt)) {

                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
                                session_start();
                            }

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["role"] = $id_rol;

                            // Redirect user to welcome page
                            // header("location: user-dashboard.php");
                            header("location: dashboard-maint.php");
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password!";
                        }
                    }
                } else {
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
