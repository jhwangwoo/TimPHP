<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 찾기</title>

    <link rel="stylesheet" href="../html/assets/css/style.css">
</head>
<body>
    <div class="login__wrap">
        <div class="login__title">
            <div class="login__logo">
                <img src="../html/assets/img/logo.png" alt="로고">
            </div>            
            <div class="login__desc">
                <h2>비밀번호 찾기</h2>
                <span class="desc">등록된 회원정보를 입력해주세요!</span>
            </div>
        </div>
        <div class="login__form">
            <form action="pwdSave.php" name="pwdSave" method="post" onsubmit="return pwdChecks()">
                <div>
                    <label for="userEmail" class="blind">이메일</label>
                    <input type="email" id="userEmail" name="userEmail" class="inputStyle" placeholder="이메일을 입력해주세요!" required>
                </div>
                <div>
                    <label for="userName" class="blind">이름</label>
                    <input type="text" id="userName" name="userName" class="inputStyle" placeholder="이름을 입력해주세요!" required>
                </div>
                <div>
                    <label for="userPhone" class="blind">핸드폰 번호</label>
                    <input type="text" id="userPhone" name="userPhone" class="inputStyle" placeholder="핸드폰 번호를 입력해주세요!" required>
                </div>
                <div class="login__list">
                    <ul>
                        <li><a href="../main/main.php">로그인</a></li>
                        <li><a href="idFind.php">아이디 찾기</a></li>
                        <li><a href="../join/conditions.php">회원가입</a></li>
                    </ul>
                </div>                       
                <div>
                    <button class="btnStyle">비밀번호 찾기</button>
                    <button type="button" class="btnStyle pwdFind__close">닫기</button>
                </div>     
            </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        document.querySelector(".pwdFind__close").addEventListener("click", () => {
            window.location.href = "../main/main.php";
        });

        function pwdChecks(){
             // 비밀번호 유효성 검사
             if($("#userPass").val() == ''){
                $("#userPassComment").text("* 비밀번호를 입력해주세요!");
                $("#userPass").focus();
                return false;
            }

            // 8~20자이내, 공백X, 영문, 숫자, 특순문자 
            let getuserPass = $("#userPass").val();
            let getuserPassNum = getuserPass.search(/[0-9]/g);
            let getuserPassEng = getuserPass.search(/[a-z]/ig);
            let getuserPassSpe = getuserPass.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

            if(getuserPass.length < 8 || getuserPass.length > 20){
                $("#userPassComment").text("* 8자리 ~ 20자리 이내로 입력해주세요~");
                return false;
            } else if (getuserPass.search(/\s/) != -1){
                $("#userPassComment").text("* 비밀번호는 공백없이 입력해주세요!");
                return false;
            } else if (getuserPassNum < 0 || getuserPassEng < 0 || getuserPassSpe < 0 ){
                $("#userPassComment").text("* 영문, 숫자, 특수문자를 혼합하여 입력해주세요!");
                return false;
            }
            

            //이름 유효성 검사
            if($("#userName").val() == ''){
                $("#userNameComment").text("* 이름을 입력해주세요!");
                $("#userName").focus();
                return false;
            }
            let getuserName = RegExp(/^[가-힣]+$/);
            if(!getuserName.test($("#userName").val())){
                $("#userNameComment").text("* 이름은 한글만 사용 가능합니다.");
                $("#userName").val('');
                $("#userName").focus();
                return false;
            }


            
            // 연락처 유효성 검사
            if($("#userPhone").val() == ''){
                $("#userPhoneComment").text("* 연락처를 입력해주세요!");
                $("#userPhone").focus();
                return false;
            }
            
            let getuserPhone = RegExp(/01[016789]-[^0][0-9]{2,3}-[0-9]{3,4}/);
            if(!getuserPhone.test($("#userPhone").val())){
                $("#userPhoneComment").text("* 휴대폰 번호가 정확하지 않습니다.(000-0000-000)");
                $("#userPhone").val('');
                $("#userPhone").focus();
                return false;
            }
        }
    </script>
</body>
</html>