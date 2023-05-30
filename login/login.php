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
                <h2>login</h2>
                <span class="desc">아이디 비밀번호를 입력해주세요!</span>
            </div>
        </div>
        <div class="login__form">
            <form action="../login/loginSave.php" name="login" method="post">
                <fieldset>
                <legend class="blind">아이디와 비밀번호 입력해주세요</legend>
                    <input type="text" class="inputStyle" name="userEmail" placeholder="이메일을 입력해주세요!">
                    <input type="password" class="inputStyle" name="userPass" placeholder="비밀번호를 입력해주세요!">
                    <div class="login__list">
                        <ul>
                            <li><a href="../login/idFind.php">아이디 찾기</a></li>
                            <li><a href="../login/pwdFind.php">비밀번호 찾기</a></li>
                            <li><a href="../join/conditions.php">회원가입</a></li>
                        </ul>
                    </div>
                    <button type="submit" class="btnStyle">로그인</button>
                    <button type="button" class="btnStyle close">닫기</button>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>