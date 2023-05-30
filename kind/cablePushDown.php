<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 케이블 푸쉬다운</title>
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
                <h4>케이블 푸쉬다운</h4>
                <p>복부근을 강화하는 운동 중 하나입니다. 복부근 중에서도 상복부의 근력을 강화하는데 효과적인 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 케이블 머신에 바를 달고 적당한 무게를 설정합니다.</li>
                        <li>2. 바를 잡은 손은 어깨 너비 정도로 벌립니다.</li>
                        <li>3. 팔꿈치를 고정한 채 바를 내리며 상체를 일직선으로 유지합니다. 손목은 고정된 상태로 유지합니다.</li>
                        <li>4. 팔꿈치가 굽히지 않도록 하면서 힘을 내어 바를 올립니다.</li>
                        <li>5. 최상점에서 1초간 정지한 후, 천천히 바를 내립니다.</li>
                        <li>6. 운동 중 상체를 흔들거나 모멘텀을 이용하지 않도록 주의합니다.</li>
                        <li>7. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ObEtLS9heOo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">케이블 푸쉬다운 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/cablepressdownimg.png" alt="케이블 푸쉬다운">
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