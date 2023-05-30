<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 덤벨 숄더 프레스</title>
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
                <h4>덤벨 숄더 프레스</h4>
                <p>바벨 숄더 프레스와 비슷하지만, 덤벨을 사용하여 어깨 근육을 강화하는 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 일자로 선 다리를 벌리고 양손에 덤벨을 들어 허리 앞에 위치시킵니다.</li>
                        <li>2. 팔꿈치를 옆구리 쪽으로 붙이고 팔꿈치를 굽히지 않고 덤벨을 어깨 높이까지 올립니다.</li>
                        <li>3. 덤벨을 올리는 동작에서 호흡을 들이고, 내리는 동작에서 호흡을 내쉬면서 천천히 원래 자세로 돌아갑니다.</li>
                        <li>4. 원래 자세로 돌아간 후 다음 운동을 위해 1-3 단계를 반복합니다.</li>
                        <li>5. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Ia9DYFMkMmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">덤벨 숄더 프레스 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/dumbbelshoulderpressimg-min.png" alt="덤벨 숄더 프레스">
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