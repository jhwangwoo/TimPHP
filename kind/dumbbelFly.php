<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 덤벨 플라이</title>
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
                <h4>덤벨 플라이</h4>
                <p>가슴근육을 강화하는 운동 중 하나로, 가슴에 큰 자극을 주면서 가슴을 확장하는 효과가 있습니다. 덤벨을 이용하여 수평으로 벌어진 팔을 서서히 위로 들어 올리면서 가슴을 확장시키는 것이 특징입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 평평한 벤치에 누워 덤벨을 양손으로 들어올립니다.</li>
                        <li>2. 팔을 약간 구부리고, 팔꿈치를 고정시킨 상태에서 팔을 천천히 수평 방향으로 벌립니다.</li>
                        <li>3. 팔을 최대한 벌리면서, 가슴 근육을 최대한으로 이용하여 덤벨을 들어올립니다.</li>
                        <li>4. 팔을 천천히 원위치 시킵니다.</li>
                        <li>5. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/yVW8fgjlags" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">덤벨 플라이 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/dumbbelflyimg-min.png" alt="덤벨 플라이">
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