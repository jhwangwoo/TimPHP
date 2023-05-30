<?php
    // 폼 데이터 가져오기
    include "../connect/connect.php";
    include "../connect/session.php";

    $userEmail = $_POST["userEmail"];
    $userPass = $_POST["userPass"];

    function msg($alert){
        echo "<p class='alert'>{$alert}<p/>";
    }

    // 데이터 가져오기 --> 유효성 검사  -->  데이터 조회  --> 로그인
    $sql = "SELECT * FROM userMembers WHERE userEmail = '$userEmail' AND userPass = '$userPass'";

    // 결과 반환
    $result = $connect -> query($sql);
    if($result){
        $count = $result -> num_rows;
        if ($count == 0) {
            $response = "
                <div class='login__title'>
                    <div class='login__logo'>
                        <img src='../html/assets/img/logo.png' alt='로고'>
                    </div>
                    <div class='login__desc'>
                        <h2>login</h2>
                        <span class='desc'>아이디 및 비밀번호가 잘못되었습니다.<br> 다시 입력해주세요</span>
                        <a href='../main/main.php' class='btnStyle atag'>로그인 페이지</a>
                    </div>
                </div>
            ";
        } else {
            // 로그인 성공
            $info = $result -> fetch_array(MYSQLI_ASSOC);
            $_SESSION['memberID'] = $info['memberID'];
            $_SESSION['userEmail'] = $info['userEmail'];
            $_SESSION['userName'] = $info['userName'];
            $_SESSION['userNickname'] = $info['userNickname'];
            // echo "<script>alert('환영합니다. {$userName}님');</script>";
            echo "<script>location.href = '../main/main.php'</script>";
        }
    } else {
        $response = "
            <div class='login__title'>
                <div class='login__logo'>
                    <img src='../html/assets/img/logo.png' alt='로고'>
                </div>
                <div class='login__desc'>
                    <h2>login</h2>
                    <span class='desc'>에러발생 - 관리자에게 문의하세요!</span>
                    <a href='../main/main.php' class='btnStyle atag'>로그인 페이지</a>
                </div>
            </div>
        ";
    }

    echo $response;
?>