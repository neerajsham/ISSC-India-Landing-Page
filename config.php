<?php
// Localhost base URL (XAMPP)
define('BASE_URL', 'http://localhost/issc-landing');

// Asset helper function
function asset($path) {
    return BASE_URL . '/' . ltrim($path, '/');
}
