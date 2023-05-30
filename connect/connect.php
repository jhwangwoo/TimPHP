<?php
    $host = "localhost";
    $user = "ghkddn132";
    $pw = "Wjd!!1471369";
    $db = "ghkddn132";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("uft-8");

    if(mysqli_connect_errno()){
        echo "Database Connect False";
    } else {
        // echo "Database Connect True";
    }
?>
<?php
    // $host = "localhost";
    // $user = "root";
    // $pw = "root";
    // $db = "phpClass";
    // $connect = new mysqli($host, $user, $pw, $db);
    // $connect -> set_charset("utf-8");

    // // if(mysqli_connect_errno()){
    // //     echo "Database Connect false";
    // // } else {
    // //     echo "Database Connect true";
    // // }
?>