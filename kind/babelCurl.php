<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 바벨 컬</title>
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
                <h4>바벨 컬</h4>
                <p>상체 운동 중 대표적인 팔 운동 중 하나입니다. 주로 이두근을 발달시키는 데 효과적인 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 바벨을 손바닥이 상체를 향하도록 잡습니다.</li>
                        <li>2. 어깨 너비 정도로 발을 벌리고 바벨을 허리 높이에 위치시킵니다.</li>
                        <li>3. 상체를 고정시킨 채로 팔꿈치를 굽혀 바벨을 어깨 근처까지 끌어올립니다.</li>
                        <li>4. 최고점에서 잠시 유지한 후 천천히 바벨을 내려줍니다.</li>
                        <li>5. 팔을 완전히 펴지 않고 일정한 각도에서 바벨을 내리고 다시 올리는 것을 반복합니다.</li>
                        <li>6. 운동 중 상체를 흔들거나 모멘텀을 이용하지 않도록 주의합니다.</li>
                        <li>7. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Dlg0W_5mq98" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">바벨 컬 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/babelcurlimg.png" alt="바벨 컬">
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