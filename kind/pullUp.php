<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 풀업(턱걸이)</title>
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
                <h3><a href="../main/mainSection.php#back">등 운동</a></h3>
                <h4>풀업(턱걸이)</h4>
                <p>상체근육을 강화시키는 대표적인 운동 중 하나입니다. 주로 등, 이두근, 삼두근 등 상체 전체의 근육을 강화시키며, 몸을 들어올리는 동작에서 코어 근육도 함께 사용됩니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 턱걸이 바 위에 손바닥이 바깥쪽이 되도록 잡습니다. 손목은 바깥쪽으로 돌려져 있어야 합니다.</li>
                        <li>2. 팔을 전부 펴고, 어깨 너비로 발을 벌리고 서서 상체를 일직선으로 유지합니다.</li>
                        <li>3. 힘을 주며 머리 위로 올라갑니다. 이때, 팔꿈치를 몸쪽으로 붙이면서 천천히 올라갑니다.</li>
                        <li>4. 턱을 바깥쪽으로 내밀고 몸을 들어올립니다. 이때, 상체는 계속해서 일직선을 유지해야 합니다.</li>
                        <li>5. 최고점까지 올라가면, 천천히 내려갑니다. 이때, 팔꿈치를 전부 펴고 팔을 내리면서 등 근육을 이용하여 천천히 내려갑니다.</li>
                        <li>6. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다.</li>
                        <li>7. 풀업은 최대 횟수는 자세가 틀어지지 않고 최대한 할 수 있는 만큼 하는 것이 좋습니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kL88ldYiMkM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">풀업(턱걸이) 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/pullupimg-min.png" alt="풀업(턱걸이)">
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