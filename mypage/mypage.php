<?php
  include "../connect/connect.php";
  include "../connect/session.php";
//   include "../connect/sessionCheck.php";
//   include "../connect/sessionCheck.php";
//   echo "<pre>";
//   var_dump($_SESSION);
//   echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이 페이지</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- SCRIPT -->
    <script defer src="../html/assets/js/common.js"></script>
</head>
<body>
    <div class="login__popup3">
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
                        <p id="userPassComment" class="comment"></p>
                        <button class="btnStyle" id="clearForm">회원탈퇴</button>
                        <button type="button" class="btnStyle close">닫기</button>
                    </fieldset>
                </form>
            </div>
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

    <script>
        // 회원탈퇴 완료
        $("#clearForm").click(function(event) {
            event.preventDefault();

            let userPass = $("#WithdrawalPass").val();

            $.ajax({
                url: "../join/WithdrawalSave.php", // 회원탈퇴 로직이 있는 PHP 페이지의 URL로 대체해야 함
                type: "POST",
                data: {
                    "userPass": userPass,
                },
                success: function(response) {
                    $(".login__popup3 .login__wrap").html(response); // 회원탈퇴 결과를 표시할 영역에 결과를 삽입

                    // executeScript();
                }
            });

            // function executeScript(){
            //     $(".login__popup3").on("click", ".close", function() {
            //         $(".login__popup3").hide();
            //     });
            //     $(".login__popup3").on("click", ".close4", function() {
            //         $(".login__popup3").hide();
            //     });
            // };
        });
    </script>

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
                <div class="section__box">
                    <div class="section__left">
                    <?php if(isset($_SESSION['memberID'])){
                                $memberID = $_SESSION['memberID'];
                                $sql = "SELECT * FROM userMembers WHERE memberID = {$memberID}";
                                $result = $connect -> query($sql);
                                $info = $result -> fetch_array(MYSQLI_ASSOC);
                    }
                    ?>
                        <?php if(isset($_SESSION['memberID'])){?>
                        <img src="../assets/profile/<?= $info['userImgSrc']?>" alt="마이페이지 이미지1" />
                        <a href="mypageModify.php">정보수정</a>
                        <a href="mypagePassword.php">비밀번호 변경</a>
                        <a href="mypageBoard.php">작성한 게시글</a>
                        <a href="#" class="clear">탈퇴하기</a>
                        <?php } else { ?>
                            <div class="box">
                                <span><?php echo "잘못된 접근입니다." ?></span>
                            </div>
                        <?php }?>
                    </div>
                    <div class="section__right">
                        <form>
                            <legend class="blind">마이페이지 영역입니다.</legend>
                            <?php if(isset($_SESSION['memberID'])){
                                $memberID = $_SESSION['memberID'];
                                $sql = "SELECT memberID, userNickname, userPhone FROM userMembers WHERE memberID = {$memberID}";
                                $result = $connect -> query($sql);
                                $info = $result -> fetch_array(MYSQLI_ASSOC);
                            ?>
                            <div class="box">
                                <label>이름 : </label>
                                <span><?= $_SESSION['userName'] ?></span>
                            </div>
                            <div class="box">
                                <label>이메일 : </label>
                                <span><?= $_SESSION['userEmail'] ?></span>
                            </div>
                            <div class="box">
                                <label>닉네임 : </label>
                                <span><?= $info['userNickname'] ?></span>
                            </div>
                            <div class="box">
                                <label>연락처 : </label>
                                <span><?= $info['userPhone'] ?></span>
                            </div>
                            <?php } else { ?>
                                <div class="box">
                                    <span><?php echo "잘못된 접근입니다." ?></span>
                                </div>
                            <?php }?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- //#section -->
        
        <?php include "../include/footer.php"; ?>
    </div>

    <script>
        // 로그인 버튼
        document.querySelector(".section__left .clear").addEventListener("click", () => {
            document.querySelector(".login__popup3").style.display = "block";
        });
        document.querySelector(".close").addEventListener("click", () => {
            document.querySelector(".login__popup3").style.display = "none";
        });
    </script>    
</body>
</html>