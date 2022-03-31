<?php
declare(strict_types = 1);

use yii\db\Connection;

return [
	'class' => Connection::class,
	'dsn' => "pgsql:host=localhost;dbname=yii2-permissions",
	'username' => "postgres",
	'password' => "postgres",
	'enableSchemaCache' => false,
];