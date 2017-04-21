<?php
$link=mysqli_connect('127.0.0.1','root','MyNewPass','rub');
if (!$link){
    echo "System refused to connect to its backbone contact the surgen and tell him ".mysqli_connect_error($link);
}


?>