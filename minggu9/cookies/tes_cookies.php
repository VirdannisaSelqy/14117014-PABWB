<?php 
setcookie("test_cookie", "test", time() + 3600, '/'); ?> 
<html> 
<body> 
<?php 
if(count($_COOKIE) > 0) { 
	echo "Cookies enabled.";
} else { 
	echo "Cookies disabled."; 
} 
?> 
<!-- Saat menggunakan incognito mode akan sedikit lebih lama dalam proses mengakses sebuah website
    di bandingkan dengan saat tidak menggunakan fitur incognito model. Hal ini terjadi karena Incognito Mode 
    tidak akan menyimpan cache,cookies dan history dari website yang di akses. 
    Incognito Mode akan memulai sesi baru ketika window web browser ditutup, 
    berbeda dengan window tanpa Incognito Mode yang akan menyimpan informasi di cache,
    yang mana cache merupakan memori sementara yang digunakan untuk menyimpan informasi dari website tersebut 
    sehingga ketika kita mengakses suatu website  maka kita akan mengakses cache terlebih dulu 
    setelah itu diteruskan ke website yang dituju sehingga saat kita mengakses website tersebut akan terasa lebih cepat  --> 

</body> 
</html>