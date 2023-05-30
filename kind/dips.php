<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 딥스</title>
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
                <h4>딥스</h4>
                <p>가슴의 하부 근육을 강화하는데 효과적인 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 딥스바에 두 손을 잡고, 딥스머신의 팔걸이에 올라탑니다.</li>
                        <li>2. 팔꿈치를 굽혀 내려가면서, 상체를 앞으로 기울입니다.</li>
                        <li>3. 팔꿈치를 최대한 굽히고, 어깨 아래까지 내려가면서 가슴과 삼두를 근력을 사용하여 천천히 내립니다.</li>
                        <li>4. 팔꿈치를 펴서 상체를 일으키며, 딥스바를 잡고 다시 시작 위치로 올라갑니다.</li>
                        <li>5. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pqn9koa_wrw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">딥스 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/dipsimg-min.png" alt="딥스">
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