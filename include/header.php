<header id="header">
    <h1><a href="../main/main.php">헬드백</a></h1>
    <div class="header__login">
      <?php if(isset($_SESSION['memberID'])){
        ?>
        <ul>
            <li><a href="#c" class="member"><?= $_SESSION['userNickname'] ?> 회원님</a></li>
        </ul>
      <?php } ?>
    </div>
    <div class="icon__box">
        <ul>
            <?php if(isset($_SESSION['memberID'])){?>

                <!-- <li class="logout">
                    <a href="../login/logout.php">
                        <img src="../html/assets/img/icon_logout.svg" alt="로그아웃" title="로그아웃">
                    </a>
                </li> -->
                <li class="logout">
                    <a href="../login/logout.php">
                        <img src="../html/assets/img/icon_logout.svg" class="logout1" alt="로그아웃" title="로그아웃">
                        <img src="../html/assets/img/icon_logout2.svg" class="logout2" alt="로그아웃" title="로그아웃">
                    </a>
                </li>
                <li class="myp">
                    <a href="../mypage/mypage.php">
                        <img src="../html/assets/img/icon_mypage.svg" class="mypage1" alt="마이페이지" title="마이페이지">
                        <img src="../html/assets/img/icon_mypage2.svg" class="mypage2" alt="마이페이지" title="마이페이지">
                    </a>
                </li>
            <?php } else{?>
                <!-- <li class="login">
                        <img src="../html/assets/img/icon_login.svg" alt="로그인" title="로그인">
                    </li> -->
                <li class="login">
                    <a href="#c">
                        <img src="../html/assets/img/icon_login.svg" class="login1" alt="로그인" title="로그인">
                        <img src="../html/assets/img/icon_login2.svg" class="login2" alt="로그인2" title="로그인">
                    </a>
                </li>
            <?php } ?>
            <li class="btn__menu">
                <a href="#c">
                    <img src="../html/assets/img/icon_menu.svg" class="menu1" alt="메뉴" title="메뉴">
                    <img src="../html/assets/img/icon_menu2.svg" class="menu2" alt="메뉴2" title="메뉴">
                </a>
            </li>
        </ul>
    </div>
</header>

<!-- //header -->
<nav id="nav">
    <button>X</button>
    <div class="nav__wrap">
        <?php if(isset($_SESSION['memberID'])){?>
            <img class="profile" src="../assets/profile/<?= $info['userImgSrc']?>" alt="프로필">
            <a class="logout btnStyle5" href="../login/logout.php">로그아웃</a>
        <?php } else{?>
            <img src="../html/assets/img/logo.png" alt="logo">
            <a href="#c" class="login btnStyle5">로그인</a>
        <?php } ?>
        <ul>
        <?php if(isset($_SESSION['memberID'])){?>
            <li><a href="../main/intro.php">헬드백 소개</a></li>
            <li><a href="../main/mainSection.php">운동 종류</a></li>
            <li><a href="../blog/blog.php">운동 방법 공유</a></li>
            <li><a href="../board/board.php">커뮤니티</a></li>
            <li><a href="../mypage/mypage.php">마이페이지</a></li>
        <?php } else{?>
            <li><a href="../main/intro.php">헬드백 소개</a></li>
            <li><a href="../main/mainSection.php">운동 종류</a></li>
            <li><a href="../blog/blog.php">운동 방법 공유</a></li>
            <li><a href="../board/board.php">커뮤니티</a></li>
        <?php } ?>
        </ul>
    </div>
</nav>
<!-- //nav -->

<!-- 로그인 -->
<div class="login__popup">
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
            <form action="loginCompelete.php" name="loginCompelete" method="post">
                <fieldset>
                    <legend class="blind">아이디와 비밀번호 입력해주세요</legend>
                    <input type="text" class="inputStyle" name="userEmailLogin" id="userEmailLogin" placeholder="이메일을 입력해주세요!">
                    <input type="password" class="inputStyle" name="userPassLogin" id="userPassLogin" placeholder="비밀번호를 입력해주세요!">
                    <div class="login__list">
                        <ul>
                            <li><a href="#c" class="idFind">아이디 찾기</a></li>
                            <li><a href="#c" class="pwdFind">비밀번호 찾기</a></li>
                            <li><a href="#c" class="join">회원가입</a></li>
                        </ul>
                    </div>
                    <button class="btnStyle" id="loginForm">로그인</button>
                    <button type="button" class="btnStyle close">닫기</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- //로그인 -->

<!-- 이용약관 -->
<div class="login__popup2">
    <div class="login__wrap">
        <div class="login__title">
            <div class="login__logo">
                <img src="../html/assets/img/logo.png" alt="헬드백">
            </div>
            <div class="login__desc">
                <span class="desc">하단에 적힌 약관을 확인해주시길 바랍니다!</span>
            </div>
        </div>
        <div class="login__information">
            <ul>
                <li class="first">개인정보보호법</li>
                <li>1. “개인정보”란 살아 있는 개인에 관한 정보로서 다음 각 목의 어느 하나에 해당하는 정보를 말한다.
                    <ul>
                        <li>가. 성명, 주민등록번호 및 영상 등을 통하여 개인을 알아볼 수 있는 정보</li>
                        <li>나. 해당 정보만으로는 특정 개인을 알아볼 수 없더라도 다른 정보와 쉽게 결합하여 알아볼 수 있는 정보. 이 경우 쉽게 결합할 수 있는지 여부는 다른 정보의 입수 가능성 등 개인을 알아보는 데 소요되는 시간, 비용, 기술 등을 합리적으로 고려하여야 한다.</li>
                        <li>다. 가목 또는 나목을 제1호의2에 따라 가명처리함으로써 원래의 상태로 복원하기 위한 추가 정보의 사용ㆍ결합 없이는 특정 개인을 알아볼 수 없는 정보(이하 “가명정보”라 한다)</li>
                    </ul>
                </li>
                <li>1-2. “가명처리”란 개인정보의 일부를 삭제하거나 일부 또는 전부를 대체하는 등의 방법으로 추가 정보가 없이는 특정 개인을 알아볼 수 없도록 처리하는 것을 말한다.</li>
                <li>2. “처리”란 개인정보의 수집, 생성, 연계, 연동, 기록, 저장, 보유, 가공, 편집, 검색, 출력, 정정(訂正), 복구, 이용, 제공, 공개, 파기(破棄), 그 밖에 이와 유사한 행위를 말한다.</li>
                <li>3. “정보주체”란 처리되는 정보에 의하여 알아볼 수 있는 사람으로서 그 정보의 주체가 되는 사람을 말한다.</li>
                <li>4. “개인정보파일”이란 개인정보를 쉽게 검색할 수 있도록 일정한 규칙에 따라 체계적으로 배열하거나 구성한 개인정보의 집합물(集合物)을 말한다.</li>
                <li>5. “개인정보처리자”란 업무를 목적으로 개인정보파일을 운용하기 위하여 스스로 또는 다른 사람을 통하여 개인정보를 처리하는 공공기관, 법인, 단체 및 개인 등을 말한다.</li>
                <li>6. “공공기관”이란 다음 각 목의 기관을 말한다.
                    <ul>
                        <li>가. 국회, 법원, 헌법재판소, 중앙선거관리위원회의 행정사무를 처리하는 기관, 중앙행정기관(대통령 소속 기관과 국무총리 소속 기관을 포함한다) 및 그 소속 기관, 지방자치단체</li>
                        <li>나. 그 밖의 국가기관 및 공공단체 중 대통령령으로 정하는 기관</li>
                    </ul>
                </li>
                <li>7. “영상정보처리기기”란 일정한 공간에 지속적으로 설치되어 사람 또는 사물의 영상 등을 촬영하거나 이를 유ㆍ무선망을 통하여 전송하는 장치로서 대통령령으로 정하는 장치를 말한다.</li>
                <li>8. “과학적 연구”란 기술의 개발과 실증, 기초연구, 응용연구 및 민간 투자 연구 등 과학적 방법을 적용하는 연구를 말한다.</li>
            </ul>

            <div class="check">
                <fieldset>
                    <legend class="blind">개인정보 제공에 동의합니까?</legend>
                    <label for="confirm">개인정보 제공에 동의합니다.</label>
                    <input type="checkbox" id="confirm" name="">
                </fieldset>
            </div>
        </div>
        <div class="login__information">
            <ul>
                <li class="first">이용약관</li>
                <li>1. 여러분은 본 약관을 읽고 동의하신 후 회원 가입을 신청하실 수 있으며,
                    <ul>
                        <li>가. 헬드백은 이에 대한 승낙을 통해 회원 가입 절차를 완료하고 여러분께 꾸다 서비스 이용 계정(이하 ‘계정’)을 부여합니다</li>
                        <li>나. 계정이란 회원이 헬드백에 로그인한 이후 이용하는 각종 서비스 이용 이력을 회원 별로 관리하기 위해 설정한 회원 식별 단위를 말합니다.</li>
                        <li>다. 가목 또는 나목을 제1호의2에 따라 가명처리함으로써 원래의 상태로 복원하기 위한 추가 정보의 사용ㆍ결합 없이는 특정 개인을 알아볼 수 없는 정보(이하 “가명정보”라 한다)</li>
                    </ul>
                </li>
                <li>1-2. “가명처리”란 개인정보의 일부를 삭제하거나 일부 또는 전부를 대체하는 등의 방법으로 추가 정보가 없이는 특정 개인을 알아볼 수 없도록 처리하는 것을 말한다.</li>
                <li>2. “처리”란 개인정보의 수집, 생성, 연계, 연동, 기록, 저장, 보유, 가공, 편집, 검색, 출력, 정정(訂正), 복구, 이용, 제공, 공개, 파기(破棄), 그 밖에 이와 유사한 행위를 말한다.</li>
                <li>3. “정보주체”란 처리되는 정보에 의하여 알아볼 수 있는 사람으로서 그 정보의 주체가 되는 사람을 말한다.</li>
                <li>4. “개인정보파일”이란 개인정보를 쉽게 검색할 수 있도록 일정한 규칙에 따라 체계적으로 배열하거나 구성한 개인정보의 집합물(集合物)을 말한다.</li>
                <li>5. “개인정보처리자”란 업무를 목적으로 개인정보파일을 운용하기 위하여 스스로 또는 다른 사람을 통하여 개인정보를 처리하는 공공기관, 법인, 단체 및 개인 등을 말한다.</li>
                <li>6. “공공기관”이란 다음 각 목의 기관을 말한다.
                    <ul>
                        <li>가. 국회, 법원, 헌법재판소, 중앙선거관리위원회의 행정사무를 처리하는 기관, 중앙행정기관(대통령 소속 기관과 국무총리 소속 기관을 포함한다) 및 그 소속 기관, 지방자치단체</li>
                        <li>나. 그 밖의 국가기관 및 공공단체 중 대통령령으로 정하는 기관</li>
                    </ul>
                </li>
                <li>7. “영상정보처리기기”란 일정한 공간에 지속적으로 설치되어 사람 또는 사물의 영상 등을 촬영하거나 이를 유ㆍ무선망을 통하여 전송하는 장치로서 대통령령으로 정하는 장치를 말한다.</li>
                <li>8. “과학적 연구”란 기술의 개발과 실증, 기초연구, 응용연구 및 민간 투자 연구 등 과학적 방법을 적용하는 연구를 말한다.</li>
            </ul>

            <div class="check">
                <fieldset>
                    <legend class="blind">이용약관 제공에 동의합니까?</legend>
                    <label for="confirm2">이용약관 제공에 동의합니다.</label>
                    <input type="checkbox" id="confirm2" name="">
                </fieldset>
            </div>
        </div>
        <div>
            <a href="#c" class="btnStyle atag agree confirm__hover" id="information__confirm">동의</a>
            <a href="#c" class="btnStyle atag close2 atag__hover">취소</a>
        </div>
    </div>
</div>
<!-- //이용약관 -->

<!-- 회원가입 -->
<div class="login__popup3">
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
            <form action="#" name="joinClear" method="post" onsubmit="return joinChecks()">
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
                    <button type="submit" class="btnStyle join2" id="join__confirm">회원가입</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- //회원가입 -->

<!-- 회원가입 완료 -->
<!-- <div class="login__popup4">
    <div class="login__wrap">
        <div class="login__title">
            <div class="login__logo">
                <img src="../html/assets/img/logo.png" alt="헬드백">
            </div>
        </div>
        <div class="login__end">
            <h2>WELCOME</h2>
            <span class="desc"></span>
        </div>
        <a href="../main/main.php" class="btnStyle atag">메인</a>
    </div>
</div> -->
<!-- //회원가입 완료 -->

<!-- 아이디 찾기 -->
<div class="login__popup5">
    <div class="login__wrap">
        <div class="login__title">
            <div class="login__logo">
                <img src="../assets/img/logo.png" alt="로고">
            </div>            
            <div class="login__desc">
                <h2>아이디 찾기</h2>
                <span class="desc">등록된 이름과 핸드폰 번호를 입력해주세요!</span>
            </div>
        </div>
        <div class="login__form">
            <form action="idFindCompelete.php" name="idFindCompelete" method="post" onsubmit="return nameChecks()">
                <div>
                    <label for="userNameIdFind" class="blind">이름</label>
                    <input type="text" id="userNameIdFind" name="userNameIdFind" class="inputStyle" placeholder="이름을 입력해주세요!" required>
                </div>
                <div>
                    <label for="userPhoneIdFind" class="blind">핸드폰 번호</label>
                    <input type="text" id="userPhoneIdFind" name="userPhoneIdFind" class="inputStyle" placeholder="핸드폰 번호를 입력해주세요!" required>
                </div>
                <div class="login__list">
                    <ul>
                        <li><a href="#c" class="login">로그인</a></li>
                        <li><a href="#c" class="pwdFind">비밀번호 찾기</a></li>
                        <li><a href="#c" class="join">회원가입</a></li>
                    </ul>
                </div>    
                <div>
                    <button class="btnStyle" id="findIdForm">아이디 찾기</button>
                    <button type="button" class="btnStyle idFind__close">닫기</button>
                </div>
            </form>            
        </div>  
    </div>
</div>
<!-- //아이디 찾기 -->

<!-- 비밀번호 찾기 -->
<div class="login__popup6">
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
            <form action="pwdFindCompelete.php" name="pwdFindCompelete" method="post" onsubmit="return pwdChecks()">
                <div>
                    <label for="userEmailPwdFind" class="blind">이메일</label>
                    <input type="email" id="userEmailPwdFind" name="userEmailPwdFind" class="inputStyle" placeholder="이메일을 입력해주세요!" required>
                </div>
                <div>
                    <label for="userNamePwdFind" class="blind">이름</label>
                    <input type="text" id="userNamePwdFind" name="userNamePwdFind" class="inputStyle" placeholder="이름을 입력해주세요!" required>
                </div>
                <div>
                    <label for="userPhonePwdFind" class="blind">핸드폰 번호</label>
                    <input type="text" id="userPhonePwdFind" name="userPhonePwdFind" class="inputStyle" placeholder="핸드폰 번호를 입력해주세요!" required>
                </div>
                <div class="login__list">
                    <ul>
                        <li><a href="#c" class="login">로그인</a></li>
                        <li><a href="#c" class="idFind">아이디 찾기</a></li>
                        <li><a href="#c" class="join">회원가입</a></li>
                    </ul>
                </div>                       
                <div>
                    <button class="btnStyle" id="findPwdForm">비밀번호 찾기</button>
                    <button type="button" class="btnStyle pwdFind__close">닫기</button>
                </div>     
            </form>
        </div>
    </div>
</div>
<!-- // 비밀번호 찾기 -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    const btnMenu = document.querySelector(".btn__menu");
    const btnClose = document.querySelector("#nav button");
    // 사이드 메뉴
    btnMenu.addEventListener("click", () => {
        document.querySelector("#nav").style.transform = "translateX(0%)";
    })
    btnClose.addEventListener("click", () => {
        document.querySelector("#nav").style.transform = "translateX(100%)";
    })
    // 로그인 버튼
    document.querySelector(".icon__box .login").addEventListener("click", () => {
        document.querySelector(".login__popup").style.display = "block";
    });
    document.querySelector(".login__popup .close").addEventListener("click", () => {
        document.querySelector(".login__popup").style.display = "none";
    });
    document.querySelector(".nav__wrap .login").addEventListener("click", () => {
        document.querySelector(".login__popup").style.display = "block";
    });

    // 이용약관
    document.querySelector(".login__list .join").addEventListener("click", () => {
        document.querySelector(".login__popup2").style.display = "block";
    });
    document.querySelector(".close2").addEventListener("click", () => {
        document.querySelector(".login__popup2").style.display = "none";
    });

    // 회원가입
    // document.querySelector(".login__wrap .join2").addEventListener("click", () => {
    //     document.querySelector(".login__popup3").style.display = "none";
    //     document.querySelector(".login__popup4").style.display = "block";
    // });

    // 아이디 찾기
    document.querySelector(".login__list .idFind").addEventListener("click", () => {
        document.querySelector(".login__popup5").style.display = "block";
    });
    document.querySelector(".login__popup5 .idFind__close").addEventListener("click", () => {
        document.querySelector(".login__popup5").style.display = "none";
    });
    document.querySelector(".login__popup5 .login__list .login").addEventListener("click", () => {
        document.querySelector(".login__popup5").style.display = "none";
        document.querySelector(".login__popup").style.display = "block";
    });
    document.querySelector(".login__popup5 .login__list .pwdFind").addEventListener("click", () => {
        document.querySelector(".login__popup5").style.display = "none";
        document.querySelector(".login__popup6").style.display = "block";
    });
    document.querySelector(".login__popup5 .login__list .join").addEventListener("click", () => {
        document.querySelector(".login__popup5").style.display = "none";
        document.querySelector(".login__popup2").style.display = "block";
    });
    document.querySelector(".login__popup5 .idFind__close").addEventListener("click", () => {
        document.querySelector(".login__popup5").style.display = "none";
        document.querySelector(".login__popup").style.display = "block";
    });

    // 비밀번호 찾기
    document.querySelector(".login__popup .login__list .pwdFind").addEventListener("click", () => {
        document.querySelector(".login__popup").style.display = "none";
        document.querySelector(".login__popup6").style.display = "block";
    });
    document.querySelector(".login__popup6 .pwdFind__close").addEventListener("click", () => {
        document.querySelector(".login__popup6").style.display = "none";
    });
    document.querySelector(".login__popup6 .login").addEventListener("click", () => {
        document.querySelector(".login__popup6").style.display = "none";
        document.querySelector(".login__popup").style.display = "block";
    });
    document.querySelector(".login__popup6 .idFind").addEventListener("click", () => {
        document.querySelector(".login__popup6").style.display = "none";
        document.querySelector(".login__popup5").style.display = "block";
    });
    document.querySelector(".login__popup6 .join").addEventListener("click", () => {
        document.querySelector(".login__popup6").style.display = "none";
        document.querySelector(".login__popup2").style.display = "block";
    });
</script>

<script>
    // 로그인 실패
    $("#loginForm").click(function(event) {
        event.preventDefault();

        let userEmail = $("#userEmailLogin").val();
        let userPass = $("#userPassLogin").val();

        $.ajax({
            url: "../login/loginCompelete.php", // 로그인 로직이 있는 PHP 페이지의 URL로 대체해야 함
            type: "POST",
            data: {
                "userEmail": userEmail,
                "userPass": userPass
            },
            success: function(response) {
                $(".login__wrap").html(response); // 로그인 결과를 표시할 영역에 결과를 삽입
            }
        });
    });
</script>

<script>
    // 이용약관
    const Confirm = document.querySelector("#confirm");
    const Confirm2 = document.querySelector("#confirm2");
    const informationConfirm = document.querySelector("#information__confirm");

    
    informationConfirm.addEventListener("click", () => {
        if(Confirm.checked == false){
            alert("개인정보가 선택이 되지 않았습니다.");
        }
        if(Confirm2.checked == false){
            alert("이용약관이 선택이 되지 않았습니다.");
        }
        if(Confirm.checked == true && Confirm2.checked == true){
            // informationConfirm.setAttribute("href", "../join/join.php");
            document.querySelector(".login__popup2").style.display = "none";
            document.querySelector(".login__popup3").style.display = "block";
        }
    });
</script>

<script>
    // 회원가입
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
                url : "../join/joinend.php",
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
                url : "../join/joinend.php",
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
        
        let getuserPhone = RegExp(/^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/);
        if(!getuserPhone.test($("#userPhone").val())){
            $("#userPhoneComment").text("* 휴대폰 번호가 정확하지 않습니다.(000-0000-000)");
            $("#userPhone").val('');
            $("#userPhone").focus();
            return false;
        }
        return true;
    }
    // <!-- userEmail, userName, userNickname, userPass, userPhone , 성별 -->
    // <!-- 이메일, 이름, 닉네임, 비밀번호, 비밀번호 확인, 연락처 , 성별 -->
</script>

<script>
    // 회원가입 완료
    $("#join__confirm").click(function(event) {
        
        if (isEmailCheck && isNickCheck && joinChecks()) {
            let userEmail = $("#userEmail").val();
            let userName = $("#userName").val();
            let userNickname = $("#userNickname").val();
            let userPass = $("#userPass").val();
            let userPhone = $("#userPhone").val();
            let userGender = $('input[name="userGender"]:checked').val();
            event.preventDefault();
            $.ajax({
                url: "../join/joinClear.php", // 비밀번호 찾기 로직이 있는 PHP 페이지의 URL로 대체해야 함
                type: "POST",
                data: {
                    "userEmail": userEmail,
                    "userName": userName,
                    "userNickname": userNickname,
                    "userPass": userPass,
                    "userPhone": userPhone,
                    "userGender": userGender
                },
                success: function(response) {
                    
                    $(".login__popup3 .login__wrap").html(response); // 비밀번호 찾기 결과를 표시할 영역에 결과를 삽입
                }
            });
        }
    });
</script>


<script>
    // 아이디 찾기 유효성 검사
    function nameChecks(){
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
        
        let getuserPhone = RegExp(/^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/);
        if(!getuserPhone.test($("#userPhone").val())){
            $("#userPhoneComment").text("* 휴대폰 번호가 정확하지 않습니다.(000-0000-000)");
            $("#userPhone").val('');
            $("#userPhone").focus();
            return false;
        }
    }
</script>

<script>
    // 아이디 찾기 완료
    $("#findIdForm").click(function(event) {
        event.preventDefault();

        let userName = $("#userNameIdFind").val();
        let userPhone = $("#userPhoneIdFind").val();

        $.ajax({
            url: "../login/idFindCompelete.php", // 아이디 찾기 로직이 있는 PHP 페이지의 URL로 대체해야 함
            type: "POST",
            data: {
                "userName": userName,
                "userPhone": userPhone
            },
            success: function(response) {
                $(".login__popup5 .login__wrap").html(response); // 아이디 찾기 결과를 표시할 영역에 결과를 삽입

                executeScript();
            }
        });

        function executeScript(){
            $(".login__popup5").on("click", ".login2", function() {
                $(".login__popup5").hide();
                $(".login__popup").show();
            });

            $(".login__popup5").on("click", ".pwdFind2", function() {
                $(".login__popup5").hide();
                $(".login__popup6").show();
            });

            $(".login__popup5").on("click", ".join2", function() {
                $(".login__popup5").hide();
                $(".login__popup2").show();
            });

            $(".login__popup5").on("click", ".main2", function() {
                $(".login__popup5").hide();
            });
        };
    });
</script>

<script>
    // 비밀번호 찾기 유효성 검사
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
        
        let getuserPhone = RegExp(/^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/);
        if(!getuserPhone.test($("#userPhone").val())){
            $("#userPhoneComment").text("* 휴대폰 번호가 정확하지 않습니다.(000-0000-000)");
            $("#userPhone").val('');
            $("#userPhone").focus();
            return false;
        }
    }
</script>

<script>
    // 비밀번호 찾기 완료
    $("#findPwdForm").click(function(event) {
        event.preventDefault();

        let userEmail = $("#userEmailPwdFind").val();
        let userName = $("#userNamePwdFind").val();
        let userPhone = $("#userPhonePwdFind").val();

        $.ajax({
            url: "../login/pwdFindCompelete.php", // 비밀번호 찾기 로직이 있는 PHP 페이지의 URL로 대체해야 함
            type: "POST",
            data: {
                "userEmail": userEmail,
                "userName": userName,
                "userPhone": userPhone
            },
            success: function(response) {
                $(".login__popup6 .login__wrap").html(response); // 비밀번호 찾기 결과를 표시할 영역에 결과를 삽입

                executeScript();
            }
        });

        function executeScript(){
            $(".login__popup6").on("click", ".login3", function() {
                $(".login__popup6").hide();
                $(".login__popup").show();
            });
            $(".login__popup6").on("click", ".join3", function() {
                $(".login__popup6").hide();
                $(".login__popup2").show();
            });
            $(".login__popup6").on("click", ".main3", function() {
                $(".login__popup6").hide();
                $(".login__popup").hide();
            });
        };
    });

    document.querySelector("#userEmail").addEventListener("focusout", emailChecking);
    document.querySelector("#userNickname").addEventListener("focusout", nickChecking);
</script>
