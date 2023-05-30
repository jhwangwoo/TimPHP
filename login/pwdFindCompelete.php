<?php
    include "../connect/connect.php";
    // register.php

    // 데이터 가져오기
    // $input = file_get_contents('php://input');
    // $data = json_decode($input, true);

    // 폼 데이터 가져오기
    $userEmail = $_POST['userEmail'];
    $userName = $_POST['userName'];
    $userName = $connect -> real_escape_string(trim($userName));
    $userPhone = $_POST['userPhone'];

    // 데이터베이스에 회원 정보 저장
    $sql = "SELECT userEmail, userName, userPhone, userPass FROM userMembers WHERE userName ='$userName' AND userEmail = '$userEmail' AND userPhone = '$userPhone'";
    $result = $connect -> query($sql);
    $rowNum = $result -> num_rows;
    $row = $result -> fetch_array(MYSQLI_ASSOC);

    // 결과 반환
    if ($rowNum > 0) {
        $response = "
            <div class='login__title'>
                <div class='login__logo'>
                    <img src='../html/assets/img/logo.png' alt='로고'>
                </div>
                <div class='login__desc'>
                    <h2>비밀번호 확인</h2>
                    <span class='desc'>비밀번호 찾기가 완료되었습니다.</span>
                </div>
            </div>
            <div class='text'>
                회원님의 비밀번호는<br>
                <span>".$row['userPass']."</span>
            </div>                
            <div>
                <button class='btnStyle login3'>로그인</button>
            </div>
            ";
    } else {
        $response = "
            <div class='login__title'>
                <div class='login__logo'>
                    <img src='../html/assets/img/logo.png' alt='로고'>
                </div>
                <div class='login__desc'>
                    <h2>비밀번호 확인</h2>
                    <span class='desc'>회원님의 등록된 정보가 없습니다.</span>
                </div>
            </div>
            <div class='text mb30'>
                회원가입을 하시면 사용하실 수 있습니다.
            </div>
            <div>
                <button class='btnStyle join3'>회원가입</button>
                <button class='btnStyle main3'>메인</button>
            </div>
        ";
    }

    echo $response;
?>