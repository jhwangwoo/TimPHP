<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 케이블 암컬</title>
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
                <h3><a href="../main/mainSection.php#arm">팔 운동</a></h3>
                <h4>케이블 암컬</h4>
                <p>케이블 머신을 이용한 상체운동 중 하나로, 이두근을 강화하는 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 케이블 머신에 케이블을 연결합니다.</li>
                        <li>2. 케이블 암컬 바를 손으로 붙잡고 양팔을 편 상태로 서서 케이블 머신에 뒤로 서둘러 팔꿈치를 90도로 굽힙니다.</li>
                        <li>3. 팔꿈치를 움켜쥐며 바를 상체에서 멀어지게 끌어올리며 이두근을 수축시킵니다.</li>
                        <li>4. 팔꿈치가 펴질 때까지 천천히 바를 내려놓습니다.</li>
                        <li>5. 운동 중 상체를 흔들거나 모멘텀을 이용하지 않도록 주의합니다.</li>
                        <li>6. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/18fgZXaIh4g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">케이블 암컬 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/cablecurlimg.png" alt="케이블 암컬">
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