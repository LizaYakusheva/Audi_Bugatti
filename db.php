<?php
$database = 'mysql:host=database:3306; dbname=docker;charset=utf8';
return new PDO($database, 'docker', 'docker');

