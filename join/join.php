<?php
    include "../connect/session.php";
    include "../connect/connect.php";

    // $db_connect = mysqli_connect("localhost", "root", "root", "sudy");
    // $select_query = "SELECT userEmail FROM members2";
    // $select_result = mysqli_query($db_connect, $select_query);

    // while($Data = mysqli_fetch_array($select_result)){
    //     // echo $Data['userEmail'];
    // }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 가입</title>
    <link rel="stylesheet" href="../html/assets/css/style.css">
</head>
<body>
    <div class="login__wrap">
        <div class="login__title">
            <div class="login__logo">
                <img src="../html/assets/img/logo.png" alt="로고">
            </div>            
            <div class="login__desc">
                <span class="desc">개인정보를 입력해주세요!</span>
            </div>
        </div>
        <div class="login__form">
            <form action="joinClear.php" name="joinClear" method="post" onsubmit="return joinChecks()">
                <fieldset>
                    <legend class="blind">회원가입</legend>
            
                    <div class="form1">
                        <label for="userEmail" class="ir">이메일</label>
                        <input type="email" id="userEmail" class="inputStyle2 userEmail" name="userEmail" placeholder="이메일을 입력해주세요." required>
                        <a href="#c" class="btnStyle2" onclick="emailChecking()">중복 확인</a>
                        <p class="warning" id="userEmailComment"><!--이메일 검사--></p>
                    </div>
                    <div class="form2">
                        <label for="userName" class="ir">이름</label>
                        <input type="text" id="userName" class="inputStyle4" name= "userName" placeholder="이름을 입력해주세요." required>
                        <p class="msg" id="userNameComment"><!--이름은 한글로만 작성할 수 있습니다.--></p>
                    </div>
                    <div class="form3">
                        <label for="userNickname" class="ir">닉네임</label>
                        <input type="text" id="userNickname" class="inputStyle2" name= "userNickname" placeholder="닉네임을 입력해주세요." required>
                        <a href="#c" class="btnStyle2" onclick="nickChecking()">중복 확인</a>
                        <p class="msg" id="userNicknameComment"><!--닉네임 존재합니다.--></p>
                    </div>
                    <div class="form4">
                        <label for="userPass" class="ir">비밀번호</label>
                        <input type="password" id="userPass" class="inputStyle4" name= "userPass" placeholder="비밀번호를 입력해주세요." required>
                        <p class="msg" id="userPassComment"><!--비밀번호, 특수기호, 숫자가 들어가야 합니다.--></p>
                    </div>
                    <div class="form5">
                        <label for="userPassC" class="ir">비밀번호 확인</label>
                        <input type="password" id="userPassC" class="inputStyle4" name= "userPassC" placeholder="비밀번호를 한번 더 입력해주세요." required>
                        <p class="msg" id="userPassCComment"><!--비밀번호가 일치하지 않습니다.--></p>
                    </div>
                    <div class="form6">
                        <label for="userPhone" class="ir">연락처</label>
                        <input type="text" id="userPhone" class="inputStyle4" name= "userPhone" placeholder=" 연락처를 입력해주세요." required>
                        <p class="msg" id="userPhoneComment"><!--휴대폰 번호를 입력해주세요!--></p>
                    </div>
                    <div>
                        <label for="userGender" class="ir">성별</label>
                        <div class="gender">
                            <label for="userMale" class="btnStyle3">남자
                                <input type="radio" id="userMale" class="userMale" name="userGender" value="남자" required>
                            </label> 
                            <label for="userFemale" class="btnStyle3">여자
                                <input type="radio" id="userFemale" class="userFemale" name="userGender" value="여자" required>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btnStyle" id="join__confirm">회원가입</button>
                </fieldset>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        let isEmailCheck = false;
        let isNickCheck = false;

        function emailChecking(){
            let userEmail = $("#userEmail").val();

            // 이메일 유효성 검사
            if($("#userEmail").val() == ''){
                $("#userEmailComment").text("* 이메일을 입력해주세요!");
                $("#userEmail").focus();
                return false;
            }
            let getuserEmail = RegExp(/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([\-.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i);
            if(!getuserEmail.test($("#userEmail").val())){
                $("#userEmailComment").text("* 이메일 형식에 맞게 작성해주세요!");
                $("#userEmail").val('');
                $("#userEmail").focus();
                return false;
            }

            if(userEmail == null || userEmail == ''){
                $("#userEmailComment").text("* 이메일을 입력해주세요");
            }else {
                $.ajax({
                    type : "POST",
                    url : "joinend.php",
                    data : {"userEmail" : userEmail, "type" : "isEmailCheck"},
                    dataType : "json",

                    success : function(data){
                        if(data.result == "good"){
                            $("#userEmailComment").text("* 사용 가능한 이메일 입니다");
                            isEmailCheck = true;
                        }else {
                            $("#userEmailComment").text("* 이미 존재하는 이메일 입니다");
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

        function nickChecking(){
            let userNickname = $("#userNickname").val();

            // 닉네임 유효성 검사
            if($("#userNickname").val() == ''){
                $("#userNicknameComment").text("* 닉네임을 입력해주세요!");
                $("#userNickname").focus();
                return false;
            }

            let getuserNickname = RegExp(/^[가-힣|0-9]+$/);
            if(!getuserNickname.test($("#userNickname").val())){
                $("#userNicknameComment").text("* 닉네임은 한글 또는 숫자만 사용 가능합니다.");
                $("#userNickname").val('');
                $("#userNickname").focus();
                return false;
            }

            if(userNickname == null || userNickname == ''){
                $("#userNicknameComment").text("* 닉네임을 입력해주세요!");
            } else {
                $.ajax({
                    type : "POST",
                    url : "joinend.php",
                    data : {"userNickname" : userNickname, "type" : "isNickCheck"},
                    dataType : "json",

                    success : function(data){
                        if(data.result == "good"){
                            $("#userNicknameComment").text("* 사용 가능한 닉네임 입니다");
                            isNickCheck = true;
                        }else {
                            $("#userNicknameComment").text("* 이미 존재하는 닉네임 입니다");
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

        function joinChecks(){
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

            // let getYouEmail = RegExp(/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([\-.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i);
            // if(!getYouEmail.test($("#youEmail").val())){
            //     $("#youEmailComment").text("* 이메일 형식에 맞게 작성해주세요!");
            //     $("#youEmail").val('');
            //     $("#youEmail").focus();
            //     return false;
            // }

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

            // 비밀번호 확인 유효성 검사
            if($("#userPassC").val() == ''){
                $("#userPassCComment").text("* 확인 비밀번호를 입력해주세요!");
                $("#userPassC").focus();
                return false;
            }

            // 비밀번호 동일한지 체크
            if($("#userPass").val() !== $("#userPassC").val()){
                $("#userPassCComment").text("* 비밀번호가 일치하지 않습니다.");
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
        // <!-- userEmail, userName, userNickname, userPass, userPhone , 성별 -->
        // <!-- 이메일, 이름, 닉네임, 비밀번호, 비밀번호 확인, 연락처 , 성별 -->
    </script>

</body>
</html>