<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 시티드 로우</title>
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
                <h4>시티드 로우</h4>
                <p>등근육을 주로 타겟하는 대표적인 운동 중 하나입니다. 시티드 로우는 시트에 앉아서 수행되며, 일반적으로 바벨이나 케이블을 사용하여 수행합니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 시티드 로우 머신에 앉습니다. 다리는 약간 벌리고, 발은 안정적인 지지면에 딱 붙여놓습니다.</li>
                        <li>2. 바벨이나 케이블을 잡아, 손바닥이 몸쪽으로 향하도록 그리고 어깨 넓이로 벌려서 잡습니다.</li>
                        <li>3. 상체는 곧게 일직선으로 세우고, 가슴을 앞으로 내밀어 줍니다. 등은 둥글게 굽혀주면서 앞으로 구부리지 않도록 합니다.</li>
                        <li>4. 팔을 굽혀서 바벨이나 케이블을 가슴쪽으로 당겨줍니다. 팔꿈치는 몸 쪽으로 붙여주면서 당겨주면 좋습니다. 이때, 등과 이두근을 사용하여 팔을 당겨줍니다.</li>
                        <li>5. 최고점에서 1~2초 정도 유지한 후, 천천히 원래 자세로 돌아옵니다. 이때, 등 근육을 사용하여 천천히 원래 자세로 돌아옵니다.</li>
                        <li>6. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pkKfWeQ9APQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">시티드 로우 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/sitedrowimg-min.png" alt="시티드 로우">
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