<?php
$pass = $_GET['pass'];
if ($pass == "NoyAcgServerP"){
    system("git pull");
    echo '{"status":"ok"}';
}else{
    echo '{"status":"error"}'
}
?>