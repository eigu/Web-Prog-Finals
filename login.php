<?php

// Sanitize the user input.
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));

// Validate the username.
$errors = [];
if (empty($username)) {
  $errors[] = 'Username is required.';
} elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
  $errors[] = 'Username must contain only letters, numbers, and underscores.';
}

// Validate the email.
if (empty($email)) {
  $errors[] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'Invalid email address.';
}

// If there are any errors, display them to the user and prevent them from logging in.
if (!empty($errors)) {
  foreach ($errors as $error) {
    echo '<p style="color: red;">' . $error . '</p>';
  }
  exit;
}