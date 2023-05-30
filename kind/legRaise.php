<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 레그레이즈</title>
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
                <h4>레그레이즈</h4>
                <p>복부근을 강화하는 운동 중 하나입니다. 복부근 중에서도 하복부의 근력을 강화하는데 효과적인 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 바닥에 누워 등을 바닥에 대고 다리를 펴줍니다.</li>
                        <li>2. 양 손은 옆으로 펴고, 양쪽 발끝을 들어올리며 골반도 함께 들어올려줍니다.</li>
                        <li>3. 골반을 들어올리는 동작을 하면서, 다리를 굽히지 않고 최대한 높이 들어올려줍니다.</li>
                        <li>4. 최대한 높이 올라갔을 때 1~2초 정도 유지한 후 천천히 내려줍니다.</li>
                        <li>5. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 10~15 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/oujD2ksPxp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">레그레이즈 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/legraiseimg-min.png" alt="레그레이즈">
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