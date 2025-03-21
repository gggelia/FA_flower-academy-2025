<?php
   $host = 'localhost'; // хост
   $db = 'flower_academy';    // имя базы данных
   $user = 'root';     // имя пользователя
   $pass = '';         // пароль

   try {
       $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       die("Connection failed: " . $e->getMessage());
   }
   ?>
