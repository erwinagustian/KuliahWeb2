<?php 
$value = 'ERWIN'; 
$value2 = 'ERWIN AGUSTIAN'; 
setcookie("username", $value); 
setcookie("namalengkap", $value2, time()+3600); /* expire in 1
hour */ 
echo "<h1>Ini halaman pengesetan cookies</h1>"; 
echo "<h2>Klik <a href='Pert15_cookies2.php'>di sini</a> untuk 
pemeriksaan cookies</h2>"; 
?> 