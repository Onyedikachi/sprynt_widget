<?php

// Set your database parameters in a file in this directory called db_local.php
// so its credentials are not stored in the remote repository
$db_local = dirname(__DIR__) . '/db_local.php';
if (file_exists($db_local)) {
    require($db_local);
} else {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=yii2basic',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ];
}
