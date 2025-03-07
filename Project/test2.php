<?php
// Example email input
$userInputEmail = "john.doe@example.com<script>alert('XSS');</script>";

// Sanitize the email input
$sanitizedEmail = filter_var($userInputEmail, FILTER_SANITIZE_EMAIL);

echo "Original: " . $userInputEmail . "<br>";
echo "Sanitized: " . $sanitizedEmail;
?>