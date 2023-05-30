<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 덤벨 컬</title>
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
                <h3><a href="../main/mainSection.php#arm">팔 운동</a></h3>
                <h4>덤벨 컬</h4>
                <p>팔뚝의 이두근을 강화하는 운동 중 하나로, 덤벨을 이용하여 수행됩니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 덤벨을 각 손에 들고 서서 양쪽 발을 어깨 너비로 벌리고 선다.</li>
                        <li>2. 팔을 내리고 손목을 뒤로 돌린 상태에서 덤벨을 들어올린다.</li>
                        <li>3. 팔꿈치를 고정한 채 덤벨을 어깨에 가까이 올리면서 숨을 들이쉬고, 상체를 약간 뒤로 기울인다.</li>
                        <li>4. 덤벨을 천천히 내려놓으며 숨을 내쉬면서 시작 자세로 돌아온다.</li>
                        <li>5. 한 쪽 팔을 모두 운동한 후 다른 팔도 같은 방식으로 운동한다.</li>
                        <li>6. 운동 중 상체를 흔들거나 모멘텀을 이용하지 않도록 주의합니다.</li>
                        <li>7. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cOver4_h5Uw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">덤벨 컬 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/dumbbelcurlimg.png" alt="덤벨 컬">
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