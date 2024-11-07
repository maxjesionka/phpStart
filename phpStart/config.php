<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1000,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'http' => true
]);

session_start();

session_regenerate_id(true);