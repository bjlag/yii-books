<?php
$db = require __DIR__ . '/db.php';
$db['dsn'] = 'mysql:host=localhost;dbname=books_tests';

return $db;
