<?php

require_once 'Loggers/UserLogger.php';
require_once 'Loggers/DatabaseLogger.php';

$userLogger = new UserLogger('Azran');
$userLogger->log('User logged in');

$databseLogger = new DatabaseLogger('mysql');
$databseLogger->log('Database connection successful : ');
