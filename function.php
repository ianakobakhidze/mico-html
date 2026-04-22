<?php

function e($text) {
    return htmlspecialchars($text);
}

function handleSubscribe() {
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["email"])) {
        $email = filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL);

        if ($email) {
            return "Thank you for subscribing!";
        } else {
            return "Please enter a valid email address.";
        }
    }

    return "";
}