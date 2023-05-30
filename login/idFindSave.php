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
    <title>아이디 찾기 완료</title>

    <link rel="stylesheet" href="../html/assets/css/style.css">
</head>
<body>
    <div class='login__wrap'>
        <div class='login__title'>
            <div class='login__logo'>
                <img src='../html/assets/img/logo.png' alt='로고'>
            </div>
<?php
                $userName = $_POST['userName'];
                $userPhone = $_POST['userPhone'];
                $userName = $connect -> real_escape_string(trim($userName));

                $sql = "SELECT userName, userPhone, userEmail FROM userMembers WHERE userName ='$userName' AND userPhone = '$userPhone'";
                $result = $connect -> query($sql);
                $rowNum = $result -> num_rows;
                $row = mysqli_fetch_array($result);

                if($rowNum == 1){
                    echo "
                            <div class='login__desc'>
                                <h2>아이디 확인</h2>
                                <span class='desc'>아이디 찾기가 완료되었습니다.</span>
                            </div>
                        </div>
                        <div class='text'>
                            회원님의 아이디는<br>
                            <span>".$row[2]."</span>
                        </div>
                        <div>
                            <button class='btnStyle login'>로그인</button>
                            <button class='btnStyle pwdFind'>비밀번호 찾기</button>
                        </div>
                    ";
                } else {
                    echo "
                        <div class='login__desc'>
                                <h2>아이디 확인</h2>
                                <span class='desc'>회원님의 등록된 아이디가 없습니다.</span>
                            </div>
                        </div>
                        <div class='text mb30'>
                            회원가입을 하시면 사용하실 수 있습니다.
                        </div>
                        <div>
                            <button class='btnStyle join'>회원가입</button>
                            <button class='btnStyle main'>메인</button>
                        </div>
                        <script>
                            document.querySelector('.join').addEventListener('click', () => {
                                window.location.href = '../join/conditions.php';
                            });
                            document.querySelector('.main').addEventListener('click', () => {
                                window.location.href = '../main/main.php';
                            });
                        </script>
                    ";
                }
            ?>
            
        
    </div>
    <script>
        document.querySelector(".login").addEventListener("click", () => {
            window.location.href = "../main/main.php";
        });
        document.querySelector(".pwdFind").addEventListener("click", () => {
            window.location.href = "pwdFind.php";
        });
    </script>
</body>
</html>