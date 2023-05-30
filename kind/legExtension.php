<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 레그 익스텐션</title>
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
                <h3><a href="../main/mainSection.php#leg">하체 운동</a></h3>
                <h4>레그 익스텐션</h4>
                <p>레그 익스텐션은 대퇴사두 근육을 주로 강화하는 하체 운동 중 하나입니다. 다리 앞쪽을 중심으로 근육을 강화할 수 있습니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 레그 익스텐션 머신에 앉습니다. 허벅지를 높이에 맞게 위치시키고 발목 패드에 발을 넣습니다.</li>
                        <li>2. 허벅지가 바닥과 평행하도록 발목을 끝까지 올려줍니다. 이때 발목은 바깥쪽으로 향하도록 하며, 발 끝을 위로 들어올리면서 하체를 긴장시켜줍니다.</li>
                        <li>3. 천천히 발목을 내려줍니다. 이때 허벅지 앞쪽의 근육을 사용하여 발목을 조절합니다. 발목을 내리면서 숨을 내쉬고, 올리면서 숨을 들이쉬는 것이 좋습니다.</li>
                        <li>4. 허벅지가 수직으로 일직선이 되도록 발목을 내려줍니다.</li>
                        <li>5. 허벅지를 일직선으로 높이 올리고, 근육을 꽉 차게 수축시켜줍니다.</li>
                        <li>6. 최상위 지점에서 1-2초간 유지한 후, 천천히 발목을 내려줍니다.</li>
                        <li>7. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mS9iwXhycJI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">레그 익스텐션 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/legextensionimg-min.png" alt="레그 익스텐션">
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