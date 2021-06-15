<?php 
if(isset($_COOKIE['username'])) { 
echo "<h1>Cookies 'username' ada. Isinya : " . 
$_COOKIE['username']; 
} else { 
echo "<h1>Cookies 'username' TIDAK ada.</h1>"; 
} 
if(isset($_COOKIE['namalengkap'])) { 
echo "<h1>Cookies 'namalengkap' ada. Isinya : " . 
$_COOKIE['namalengkap']; 
} else { 
echo "<h1>Cookies 'namalengkap' TIDAK ada.</h1>"; 
} 
echo "<h2>Klik <a href='Pert15_cookies1.php'>di sini</a> untuk 
penciptaan cookies</h2>"; 
echo "<h2>Klik <a href='Pert15_cookies3.php'>di sini</a> untuk 
penghapusan cookies</h2>"; 
?>