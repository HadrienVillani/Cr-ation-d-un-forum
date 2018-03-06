<?php
try{$conn = new PDO('mysql:dbname=forum;host=localhost', 'root', '19HV_root20');
}catch (PDOException $exception) {
die($exception->getmessage());
}