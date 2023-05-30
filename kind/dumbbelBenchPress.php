<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 덤벨 벤치 프레스</title>
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
                <h3><a href="../main/mainSection.php#chest">가슴 운동</a></h3>
                <h4>덤벨 벤치 프레스</h4>
                <p>가슴의 상부 근육을 강화하는데 효과적인 운동입니다. 인클라인 바벨 벤치 프레스와는 또 다른 효과를 얻을 수 있습니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 벤치에 누워 덤벨을 각 손에 들고 팔을 수직으로 유지합니다. 팔꿈치를 약간 구부려 들고, 팔꿈치가 어깨와 수직이 되도록 합니다.</li>
                        <li>2. 가슴 앞쪽으로 덤벨을 내리면서 들고 있는 덤벨이 어깨 아래쪽에 닿을 때까지 내립니다. 이때 팔꿈치를 바닥 방향으로 내려가지 않도록 유지합니다.</li>
                        <li>3. 가슴 아래쪽에서 덤벨을 밀어 올리면서 상체를 약간 들어 올립니다. 이때 팔을 완전히 펴지 않도록 조심하세요.</li>
                        <li>4. 최상점에서 덤벨을 잠시 유지한 후, 다시 가슴 아래쪽으로 내립니다.</li>
                        <li>5. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/xTQL6jvVMNA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">덤벨 벤치 프레스 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/dumbbelbenchpressimg-min.png" alt="덤벨 벤치 프레스">
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