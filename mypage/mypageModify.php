<?php
  include "../connect/connect.php";
  include "../connect/session.php";
  include "../connect/sessionCheck.php";

//   $blogID = $_GET['blogID'];
//   $blogSql = "SELECT * FROM blog WHERE blogID = '$blogID'";
//   $blogResult = $connect -> query($blogSql);
//   $blogInfo = $blogResult -> fetch_array(MYSQLI_ASSOC);

  $memberID = $_SESSION['memberID'];

  $sql = "SELECT * FROM userMembers WHERE memberID = {$memberID}";
  $result = $connect -> query($sql);
  $info = $result -> fetch_array(MYSQLI_ASSOC);

//   echo "<pre>";
//   var_dump($info);
//   echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이페이지 정보 수정</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- SCRIPT -->
    <script defer src="assets/js/common.js"></script>

    <style>

    </style>
</head>
<body>
    <div id="wrap">
        <?php include "../include/skip.php"; ?>
        <!-- //SKIP -->
        <?php include "../include/header.php"; ?>
        <!-- //header -->
        <div class="slider__wrap">
            <div class="slider__img">
                <div class="slider">
                    <img src="../html/assets/img/slider_01.png" class="img__logo">
                </div>
            </div>
        </div>
        <!-- banner -->

        <section id="section__mypage">
            <div class="container">
                <h1 class="mypage">마이페이지</h1>
                <h2>정보 수정</h2>
                <div class="modify__box">
                    <form action="mypageModifySave.php" name="mypageModifySave" method="post" enctype="multipart/form-data" onsubmit="return mypageChecks()">
                        <fieldset class="modify__left">
                            <img id="preview" src="../assets/profile/<?=$info['userImgSrc']?>" alt="마이페이지 프로필 사진" />
                            <legend class="blind">마이페이지 프로필 사진 변경</legend>
                            <label for="userImgSrc">프로필 사진 변경
                                <input type="file" id="userImgSrc" name="userImgSrc" accept=".jpg, .jpeg, .png, .gif" onchange="loadFile(event)">
                            </label>
                            <span>* jpg, jpeg, png, gif 파일만 넣을 수 있습니다.<br>이미지 용량은 1MB를 넘을 수 없습니다.<br>이미지 가로, 세로 비율 1:1을 추천합니다.</span>
                        </fieldset>
                        <fieldset class="modify__right">
                            <legend class="blind">마이페이지 정보 수정 영역입니다.</legend>
                            <?php
                                if($result && $result -> num_rows > 0){
                                    echo "<div class='box'><label for='userNameMy'>이름: </label><input name='userNameMy' id='userNameMy' type='text' value='".$info['userName']."' readonly></div>";

                                    echo "<div class='box'><label for='userEmailMy'>이메일: </label><div class='check__wrap'><div class='input__wrap'><input name='userEmailMy' id='userEmailMy' type='email' value='".$info['userEmail']."' required>";
                                    echo "<a href='#c' class='btnStyleM' onclick='myemailChecking()'>중복 확인</a></div>";
                                    echo "<p class='warning' id='userEmailMyComment'><!--이메일 검사--></p></div></div>";

                                    echo "<div class='box'><label for='userNicknameMy'>닉네임: </label><div class='check__wrap'><div class='input__wrap'><input name='userNicknameMy' id='userNicknameMy' type='text' value='".$info['userNickname']."' required>";
                                    echo "<a href='#c' class='btnStyleM' onclick='mynickChecking()'>중복 확인</a></div>";
                                    echo "<p class='warning' id='userNicknameMyComment'><!--닉네임 검사--></p></div></div>";

                                    echo "<div class='box'><label for='userPhoneMy'>연락처: </label><div class='input__wrap2'><input name='userPhoneMy' id='userPhoneMy' type='text' value='".$info['userPhone']."' required>";
                                    echo "<p class='warning' id='userPhoneMyComment'><!--연락처 검사--></p></div></div>";
                                    echo "<button type='submit'>수정 완료</button>";
                                }
                            ?>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
        <!-- //#section -->

        <?php include "../include/footer.php"; ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // 이미지 미리보기
        let loadFile = function(event) {
            let output = document.getElementById('preview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };

        // 유효성 검사
        let mypageisEmailCheck = false;
        let mypageisNickCheck = false;

        function myemailChecking(){
            let userEmail = $("#userEmailMy").val();
            // 이메일 유효성 검사
            if($("#userEmailMy").val() == ''){
                $("#userEmailMyComment").text("* 이메일을 입력해주세요!");
                $("#userEmailMy").focus();
                return false;
            }
            let getuserEmail = RegExp(/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([\-.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i);
            if(!getuserEmail.test($("#userEmailMy").val())){
                $("#userEmailMyComment").text("* 이메일 형식에 맞게 작성해주세요!");
                $("#userEmailMy").val('');
                $("#userEmailMy").focus();
                return false;
            }
            if(userEmail == null || userEmail == ''){
                $("#userEmailMyComment").text("* 이메일을 입력해주세요");
            }else {
                $.ajax({
                    type : "POST",
                    url : "mypageEnd.php",
                    data : {"userEmail" : userEmail, "type" : "mypageisEmailCheck"},
                    dataType : "json",
                    success : function(data){
                        if(data.result == "good"){
                            $("#userEmailMyComment").text("* 사용 가능한 이메일 입니다");
                            isEmailCheck = true;
                        }else {
                            $("#userEmailMyComment").text("* 이미 존재하는 이메일 입니다");
                            isEmailCheck = false;
                        }
                    },
                    error : function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        }
        function mynickChecking(){
            let userNickname = $("#userNicknameMy").val();
            // 닉네임 유효성 검사
            if($("#userNicknameMy").val() == ''){
                $("#userNicknameMyComment").text("* 닉네임을 입력해주세요!");
                $("#userNicknameMy").focus();
                return false;
            }
            let getuserNickname = RegExp(/^[가-힣|0-9]+$/);
            if(!getuserNickname.test($("#userNicknameMy").val())){
                $("#userNicknameMyComment").text("* 닉네임은 한글 또는 숫자만 사용 가능합니다.");
                $("#userNicknameMy").val('');
                $("#userNicknameMy").focus();
                return false;
            }
            if(userNickname == null || userNickname == ''){
                $("#userNicknameMyComment").text("* 닉네임을 입력해주세요!");
            } else {
                $.ajax({
                    type : "POST",
                    url : "mypageEnd.php",
                    data : {"userNickname" : userNickname, "type" : "mypageisNickCheck"},
                    dataType : "json",
                    success : function(data){
                        if(data.result == "good"){
                            $("#userNicknameMyComment").text("* 사용 가능한 닉네임 입니다");
                            isNickCheck = true;
                        }else {
                            $("#userNicknameMyComment").text("* 이미 존재하는 닉네임 입니다");
                            isNickCheck = true;
                        }
                    },
                    error : function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        }

        function mypageChecks(){
            // 연락처 유효성 검사
            if($("#userPhoneMy").val() == ''){
                $("#userPhoneMyComment").text("* 연락처를 입력해주세요!");
                $("#userPhoneMy").focus();
                return false;
            }
            let getuserPhone = RegExp(/^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/);
            if(!getuserPhone.test($("#userPhoneMy").val())){
                $("#userPhoneMyComment").text("* 휴대폰 번호가 정확하지 않습니다.(000-0000-000)");
                $("#userPhoneMy").val('');
                $("#userPhoneMy").focus();
                return false;
            }

                // 중복 검사를 통과했는지 확인
            if (!isEmailCheck){
                $("#userEmailMyComment").text("* 이메일 중복을 확인해주세요.");
                return false;
            }

            if (!isNickCheck){
                $("#userNicknameMyComment").text("* 닉네임 중복을 확인해주세요.");
                return false;
            }
        }

        document.querySelector("#userEmailMy").addEventListener("focusout", myemailChecking);
        document.querySelector("#userNicknameMy").addEventListener("focusout", mynickChecking);
</script>
</body>
</html>