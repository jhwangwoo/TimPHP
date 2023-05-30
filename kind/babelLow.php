<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 바벨 로우</title>
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
                <h4>바벨 로우</h4>
                <p>대표적인 등운동 중 하나입니다. 등근육뿐만 아니라 여러 근육을 함께 사용하는 복합 운동으로, 상체근력을 증가시키는 데 효과적입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 바벨이 눈높이 정도 되도록 놓인 상태에서 바벨 앞에 서서 발을 어깨 너비로 벌립니다.</li>
                        <li>2. 바벨은 어깨 너비보다 약간 넓게 잡습니다.</li>
                        <li>3. 가슴을 펴고 등을 곧게 펴고, 무게중심을 발 중앙으로 두고 상체를 세웁니다.</li>
                        <li>4. 무릎을 약간 구부리면서 상체를 내려놓고 바벨을 잡습니다.</li>
                        <li>5. 가슴을 펴고 머리는 곧게 하며, 상체를 일직선으로 유지한 채로 바벨을 땅에서 들어올립니다.</li>
                        <li>6. 바벨이 허리와 등 쪽으로 올라가면서 팔꿈치를 옆구리 쪽으로 들어올려 바벨을 상체 쪽으로 당깁니다.</li>
                        <li>7. 바벨을 허리쪽으로 당기면서 등과 상체의 자세가 변하지 않도록 유지합니다.</li>
                        <li>8. 바벨을 가슴 근처로 끌어당긴 후, 천천히 바벨을 내려놓습니다.</li>
                        <li>9. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/EEqGCoTuYfQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">바벨 로우 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/babelrowimg-min.png" alt="바벨 로우">
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