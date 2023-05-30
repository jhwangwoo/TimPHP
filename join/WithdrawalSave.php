<?php
    include "../connect/connect.php";
    include "../connect/session.php";


    $userPass = $_POST['userPass'];
    $userID = $_SESSION['memberID'];

    // echo $userID;
    // userMembers
    $sql = "DELETE FROM userMembers WHERE memberID = '$userID' AND userPass = '$userPass'";
    $result = $connect -> query($sql);
    $deletedRows = $connect -> affected_rows;

    if ($deletedRows == 1) {
        echo "
            <div class='login__title'>
                <div class='login__logo'>
                    <img src='../html/assets/img/logo.png' alt='로고'>
                </div>
                <div class='login__desc'>
                    <h2>회원탈퇴</h2>
                </div>
            </div>
            <div>
                <p id='userPassComment' class='userPassComment'>회원 탈퇴가 성공적으로 처리되었습니다.</p>
                <a  href='../login/logout.php' class='btnStyle atag'>닫기</a>
            </div>
        ";
    } else {
        echo  "
            <div class='login__title'>
                <div class='login__logo'>
                    <img src='../html/assets/img/logo.png' alt='로고'>
                </div>
                <div class='login__desc'>
                    <h2>회원탈퇴</h2>
                </div>
            </div>
            <div>
                <p id='userPassComment' class='userPassComment'>회원님의 비밀번호가 틀렸습니다.<br>다시 입력해주세요.</p>
                <a  href='../mypage/mypage.php' class='btnStyle atag'>닫기</a>
            </div>
        ";
    }

    // 데이터베이스 연결 종료
    // $conn->close();
?>
