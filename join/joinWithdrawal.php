<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    
</head>
<body>
    <div class="login__wrap">
        <div class="login__title">
            <div class="login__logo">
                <img src="../html/assets/img/logo.png" alt="로고">
            </div>
            <div class="login__desc">
                <h2>회원탈퇴</h2>
                <!-- <span class="desc">아이디 비밀번호를 입력해주세요!</span> -->
            </div>
        </div>
        <div class="login__form">
            <form action="WithdrawalSave.php" name="WithdrawalSave" method="post" onsubmit="return Withdrawal()">
                <fieldset>
                    <legend class="blind">회원 탈퇴 영역입니다.</legend>

                    <input type="password" class="inputStyle" name="WithdrawalPass" id="WithdrawalPass" placeholder="회원 탈퇴를 위한 비밀번호를 입력해주세요.">
                    <p id="userPassComment"></p>
                    <button type="submit" class="btnStyle">회원탈퇴</button>
                    <button type="button" class="btnStyle close">닫기</button>
                </fieldset>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function Withdrawal(){
            // 비밀번호 유효성 검사
            if($("#WithdrawalPass").val() == ''){
                $("#userPassComment").text("* 비밀번호를 입력해주세요!");
                $("#WithdrawalPass").focus();
                return false;
            }

            // 8~20자이내, 공백X, 영문, 숫자, 특순문자 
            let getuserPass = $("#WithdrawalPass").val();
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
        }
    </script>
</body>
</html>