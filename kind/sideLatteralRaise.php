<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 사이드 레터럴 레이즈</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- SCRIPT -->
    <script defer src="../assets/js/common.js"></script>
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

        <div class="container">
            <div class="kind__section">
                <h3><a href="../main/mainSection.php#shoulder">어깨 운동</a></h3>
                <h4>사이드 레터럴 레이즈</h4>
                <p>어깨 근육 중 측면 어깨 근육을 강화하는 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 두 손에 덤벨을 들고, 어깨 너비로 발을 벌리고 선다. 팔은 몸 옆에 붙이고 손바닥은 몸을 향하도록 한다.</li>
                        <li>2. 어깨 높이에서 덤벨을 들어 옆으로 뻗는다. 팔꿈치는 약간 구부리고, 손바닥이 바닥을 향하도록 유지한다.</li>
                        <li>3. 어깨가 귀와 같은 높이가 되면, 1-2초간 유지한 후, 천천히 원위치로 돌아간다.</li>
                        <li>4. 덤벨을 들어 올릴 때 숨을 들이고, 내릴 때 숨을 내쉬면 된다.</li>
                        <li>5. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 레이즈 운동은 저중량 고반복으로 하는게 좋습니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/YdhHnZxcpgY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">사이드 레터럴 레이즈 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/sidelatteralraise-min.png" alt="사이드 레터럴 레이즈">
                </figure>
            </div>            
        </div>

        <?php include "../include/blogArticle.php"; ?>

        <?php include "../include/footer.php"; ?>
    </div>

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
    </script>
</body>
</html>