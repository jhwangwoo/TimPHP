<?php
    include "../connect/connect.php";
    // register.php

    // 데이터 가져오기
    // $input = file_get_contents('php://input');
    // $data = json_decode($input, true);

    // 폼 데이터 가져오기
    $userName = $_POST['userName'];
    $userPhone = $_POST['userPhone'];
    $userName = $connect -> real_escape_string(trim($userName));

    // 데이터베이스에 회원 정보 저장
    $sql = "SELECT userName, userPhone, userEmail FROM userMembers WHERE userName = '$userName' AND userPhone = '$userPhone'";
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
                    <h2>아이디 확인</h2>
                    <span class='desc'>아이디 찾기가 완료되었습니다.</span>
                </div>
            </div>
            <div class='text'>
                회원님의 아이디는<br>
                <span>" . $row['userEmail'] . "</span>
            </div>
            <div>
                <button type='button' class='btnStyle login2'>로그인</button>
                <button type='button' class='btnStyle pwdFind2'>비밀번호 찾기</button>
            </div>
        ";
    } else {
        $response = "
            <div class='login__title'>
                <div class='login__logo'>
                    <img src='../html/assets/img/logo.png' alt='로고'>
                </div>
                <div class='login__desc'>
                    <h2>아이디 확인</h2>
                    <span class='desc'>회원님의 등록된 아이디가 없습니다.</span>
                </div>
            </div>
            <div class='text mb30'>
                회원가입을 하시면 사용하실 수 있습니다.
            </div>
            <div>
                <button type='button' class='btnStyle join2'>회원가입</button>
                <button type='button' class='btnStyle main2'>메인</button>
            </div>
        ";
    }

    echo $response;
?>