<?php
$pdo = new PDO('mysql:dbname=demo;host=localhost', 'Lucas', 'Maig-3399');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
