<?php
    include "../connect/connect.php";

    $type = $_POST['type'];
    $jsonResult = "bad";

    if( $type == "isEmailCheck"){
        $userEmail = $connect -> real_escape_string(trim($_POST['userEmail']));
        $sql = "SELECT userEmail FROM userMembers WHERE userEmail = '{$userEmail}'";
    }
    if( $type == "isNickCheck"){
        $userNickname = $connect -> real_escape_string(trim($_POST['userNickname']));
        $sql = "SELECT userNickname FROM userMembers WHERE userNickname = '{$userNickname}'";
    }

    $result = $connect -> query($sql);
    
    if( $result -> num_rows == 0 ){
        $jsonResult = "good";
    }
    echo json_encode(array("result" => $jsonResult));
?>