<?php 

include "databases.php";

$result = mysqli_query($link,"SELECT * FROM `user`");

$user = mysqli_fetch_assoc($result);
print_r($user);
echo "<br>";

$user = mysqli_fetch_assoc($result);
print_r($user);
echo "<br>";

$user = mysqli_fetch_assoc($result);
print_r($user);
echo "<br>";

$user = mysqli_fetch_assoc($result);
print_r($user);
echo "<br>";

 ?>


<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>users!</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    

    <script>
    var userLang = navigator.language || navigator.userLanguage;
    var userLang_detected = userLang.toLowerCase();
    if (userLang_detected != 'ru-ru' && userLang_detected != 'ru') {
        document.title = 'Welcome!';
        document.getElementById('t1').innerHTML = 'Welcome!';
        document.getElementById('t2').innerHTML = 'Open Server Panel is running ;-)';
        document.getElementById('t3').innerHTML = 'User\'s manual <i class="right"></i>';
    }
    </script>
</body>

</html>
