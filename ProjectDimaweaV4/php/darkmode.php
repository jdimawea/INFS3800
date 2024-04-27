<?php
// Start the session
session_start();

// Check if the dark mode session variable is set
if(isset($_SESSION['dark_mode']) && $_SESSION['dark_mode'] === true) {
    // Dark mode is enabled
    $darkModeClass = 'dark-mode';
} else {
    // Dark mode is disabled
    $darkModeClass = '';
}

// Function to toggle dark mode
function toggleDarkMode() {
    if(isset($_SESSION['dark_mode']) && $_SESSION['dark_mode'] === true) {
        $_SESSION['dark_mode'] = false;
    } else {
        $_SESSION['dark_mode'] = true;
    }
    header('Location: ' . $_SERVER['PHP_SELF']); // Reload the page to apply changes
    exit;
}

// Check if the button to toggle dark mode is clicked
if(isset($_POST['toggle_dark_mode'])) {
    toggleDarkMode();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Toggle</title>
    <style>
        /* Dark mode styles */
        .dark-mode {
            background-color: #222;
            color: #fff;
        }
    </style>
</head>
<body class="<?php echo $darkModeClass; ?>">
    <h1>Dark Mode Toggle</h1>
    <form method="post">
        <button type="submit" name="toggle_dark_mode">Toggle Dark Mode</button>
    </form>
    <p>This is a sample page. Toggle dark mode to see the changes.</p>
</body>
</html>
