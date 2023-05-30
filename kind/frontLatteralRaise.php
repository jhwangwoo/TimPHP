<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 프런트 레터럴 레이즈</title>
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
                <h4>프런트 레터럴 레이즈</h4>
                <p>어깨 근육 중 전면 어깨 근육을 강화하는 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 적당한 무게의 덤벨을 들고 어깨너비만큼 선다.</li>
                        <li>2. 팔을 허벅지 앞으로 모으고 명치를 들고 허리를 꼿꼿이 세운다.</li>
                        <li>3. 팔을 들어올릴때 주먹이 내 눈높이만큼 오게 하면 된다. 너무 올릴 필요는 없습니다.</li>
                        <li>4. 올릴때 내릴때 같은 힘으로 행한다는 생각으로 하고 속도를 일정하게 하는 것이 포인트입니다.</li>
                        <li>5. 레이즈는 고립운동이기에 처음에 할때 본인이 할 수 있는 무게로 하다가 점점 무게를 바꿔가면서 수행하도록 하는게 좋습니다.</li>
                        <li>6. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 레이즈 운동은 저중량 고반복으로 하는게 좋습니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/m0ddyws4VL4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">프런트 레터럴 레이즈 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/frontlatteralraiseimg-min.png" alt="프런트 레터럴 레이즈">
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