<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 덤벨 로우</title>
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
                <h4>덤벨 로우</h4>
                <p>등근육을 강화시키는 운동 중 하나로, 바벨로우와 마찬가지로 등 전체뿐만 아니라 이두근과 삼두근도 함께 사용되는 복합 운동입니다. 단, 바벨 대신 덤벨을 사용하여 수행하는 점이 다릅니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 덤벨을 각 손에 하나씩 들고, 어깨 너비로 발을 벌립니다.</li>
                        <li>2. 상체를 약간 숙이고, 가슴을 펴서 등을 곧게 펴고 무게중심을 발 중앙으로 두고 상체를 일직선으로 유지합니다.</li>
                        <li>3. 한 손씩 덤벨을 들어 상체쪽으로 당겨, 팔꿈치를 옆구리쪽으로 들어올리면서 등근육을 수축시킵니다.</li>
                        <li>4. 상체와 팔을 일직선으로 유지하며, 최대한 등근육에 집중하여 수축시킨 상태에서 덤벨을 천천히 내려놓습니다.</li>
                        <li>5. 반대쪽 팔도 같은 방법으로 운동을 수행합니다.</li>
                        <li>6. 왼쪽, 오른쪽 팔을 번갈아가며 원하는 횟수를 완료합니다.</li>
                        <li>7. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/GkSJUxYxDf4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">덤벨 로우 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/dumbbelrowimg-min.png" alt="덤벨 로우">
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