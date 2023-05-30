<?php
    // 로그인 하지 않았을 경우 로그인 페이지로 이동
    if(!isset($_SESSION['memberID'])){
        Header("location:../main/main.php");
    }
?>