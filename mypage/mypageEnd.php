<?php
    include "../connect/connect.php";
    include "../connect/session.php";


    $type = $_POST['type'];
    $jsonResult = "bad";

    $memberID = $_SESSION['memberID'];  // 현재 사용자의 ID를 가져옵니다.

    if( $type == "mypageisEmailCheck"){
        // $userEmail = $connect -> real_escape_string(trim($_POST['userEmail']));
        // $sql = "SELECT userEmail FROM userMembers WHERE userEmail = '{$userEmail}'";

        $userEmail = $connect -> real_escape_string(trim($_POST['userEmail']));
        // 현재 사용자의 이메일을 제외한 나머지 회원들의 이메일과 비교
        $sql = "SELECT userEmail FROM userMembers WHERE userEmail = '{$userEmail}' AND memberID != '{$memberID}'";
    }
    if( $type == "mypageisNickCheck"){
        // $userNickname = $connect -> real_escape_string(trim($_POST['userNickname']));
        // $sql = "SELECT userNickname FROM userMembers WHERE userNickname = '{$userNickname}'";

        $userNickname = $connect -> real_escape_string(trim($_POST['userNickname']));
        // 현재 사용자의 닉네임을 제외한 나머지 회원들의 닉네임과 비교
        $sql = "SELECT userNickname FROM userMembers WHERE userNickname = '{$userNickname}' AND memberID != '{$memberID}'";
    }

    $result = $connect -> query($sql);
    
    if( $result -> num_rows == 0 ){
        $jsonResult = "good";
    }
    echo json_encode(array("result" => $jsonResult));
?>