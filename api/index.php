<?php

// Forward Vercel requests to Laravel's public/index.php

// Set the correct path for Laravel
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';
$_SERVER['SCRIPT_FILENAME'] = $_SERVER['DOCUMENT_ROOT'] . '/index.php';

// Include the Laravel application
require __DIR__ . '/../public/index.php';
