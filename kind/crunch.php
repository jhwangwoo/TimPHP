<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 크런치</title>
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
                <h3><a href="../main/mainSection.php#leg">복근 운동</a></h3>
                <h4>크런치</h4>
                <p>복부근을 강화하는 운동 중 하나입니다. 복부근 중에서도 상복부의 근력을 강화하는데 효과적인 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 누워서 바닥에 등을 붙입니다. 무릎은 굽혀 발바닥은 바닥에 딱 붙혀놓습니다. 무릎은 어깨 너비로 벌립니다.</li>
                        <li>2. 손은 귀 옆에 놓고 어깨 높이에 손등이 바닥을 보게끔 합니다.</li>
                        <li>3. 복부의 힘으로 상체를 올려 옆구리가 무릎 쪽으로 가게 합니다. 이때 다리나 골반을 사용하지 않도록 주의해야 합니다.</li>
                        <li>4. 상체를 1-2초 정도 유지한 후 천천히 원위치 합니다. 이때 바닥에 등이 붙는 것이 중요합니다.</li>
                        <li>5. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 10~15 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ghclqJxl8AU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">크런치 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/crunchimg-min.png" alt="크런치">
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