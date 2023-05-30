<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $userName = $_SESSION['userName'];

// //   if (is_null($userName)) {
// //     header( 'Location: ../login/login.php' );
// //   }

//   echo $userName;
//   echo $userPassword, $newPassword, $newPasswordConfirm;
    if(isset($_SESSION['memberID'])){
    $memberID = $_SESSION['memberID'];
    $sql = "SELECT * FROM userMembers WHERE memberID = {$memberID}";
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 변경</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- SCRIPT -->
    <script defer src="../assets/js/common.js"></script>
</head>
<body>
    <div id="wrap">
    <?php include "../include/header.php"; ?>

        <div class="slider__wrap">
            <div class="slider__img">
                <div class="slider">
                    <img src="../html/assets/img/slider_01.png" class="img__logo">
                </div>
            </div>
        </div>
        <!-- banner -->

        <section id="section__mypage">
            <h1 class="mypage">마이페이지</h1>
            <h2>비밀번호 변경</h2>
            <div class="section__box">
                <div class="section__left">
                    <img src="../assets/profile/<?= $info['userImgSrc']?>" alt="마이페이지 이미지1" />
                    <div class="profile__box">
                        <!-- <a href="#" class="mymo__profile">변경하기</a> -->
                    </div>
                </div>
                <div class="section__right">
                    <!-- <form name="mypagePasswordChange"> -->
                    <form action="mypagePasswordChange.php" name="mypagePasswordChange" method="post" onsubmit="return mypagePassword()">
                        <legend class="blind">비밀번호 변경 영역입니다.</legend>
                        <div class="box">
                            <label for="userPassword">현재 비밀번호 : </label>
                            <input type="password" id="userPassword" name="userPassword" placeholder="현재 비밀번호를 입력해주세요!">
                            <p id="nowpass"></p>
                        </div>
                        <div class="box">
                            <label for="newPassword">새 비밀번호 : </label>
                            <input type="password" id="newPassword" name="newPassword" placeholder="새 비밀번호를 입력해주세요!">
                            <p id="newnowpass"></p>
                        </div>
                        <div class="box">
                            <label for="newPasswordConfirm">비밀번호 확인 : </label>
                            <input type="password" id="newPasswordConfirm" name="newPasswordConfirm" placeholder="새 비밀번호를 다시 입력해주세요!">
                            <p id="newnowpassC"></p>
                        </div>
                        <button type="submit" class="mymo__profile">변경하기</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- //#section -->
        
        <?php include "../include/footer.php"; ?>
    </div>
        <!-- sub --> 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function mypagePassword(){
           // 비밀번호 유효성 검사
           if($("#userPassword").val() == ''){
                $("#nowpass").text("* 비밀번호를 입력해주세요!");
                $("#userPassword").focus();
                return false;
            }

            // 8~20자이내, 공백X, 영문, 숫자, 특순문자 
            let getuserPass = $("#newPassword").val();
            let getuserPassNum = getuserPass.search(/[0-9]/g);
            let getuserPassEng = getuserPass.search(/[a-z]/ig);
            let getuserPassSpe = getuserPass.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

            if(getuserPass.length < 8 || getuserPass.length > 20){
                $("#newnowpass").text("* 8자리 ~ 20자리 이내로 입력해주세요~");
                return false;
            } else if (getuserPass.search(/\s/) != -1){
                $("#newnowpass").text("* 비밀번호는 공백없이 입력해주세요!");
                return false;
            } else if (getuserPassNum < 0 || getuserPassEng < 0 || getuserPassSpe < 0 ){
                $("#newnowpass").text("* 영문, 숫자, 특수문자를 혼합하여 입력해주세요!");
                return false;
            }

            // 비밀번호 확인 유효성 검사
            if($("#newPasswordConfirm").val() == ''){
                $("#newnowpassC").text("* 확인 비밀번호를 입력해주세요!");
                $("#newPasswordConfirm").focus();
                return false;
            }

            // 비밀번호 동일한지 체크
            if($("#newPassword").val() !== $("#newPasswordConfirm").val()){
                $("#newnowpassC").text("* 비밀번호가 일치하지 않습니다.");
                return false;
            }
        } 
    </script>
</body>
</html>