<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 인클라인  벤치 프레스</title>
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
                <h4>인클라인 벤치프레스</h4>
                <p>가슴의 상부 근육을 강화하는데 효과적인 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 인클라인 벤치에 누워서 바벨을 잡습니다.</li>
                        <li>2. 바벨을 가슴 앞쪽에 위치시키고, 어깨 너비로 벌린 팔을 이용해 바벨을 들어올립니다.</li>
                        <li>3. 호흡을 내쉬며 바벨을 천천히 내려놓습니다. 바벨이 가슴과 접촉하게 될 때까지 내려놓습니다.</li>
                        <li>4. 호흡을 들이쉬며 바벨을 천천히 들어올립니다. 바벨을 들어올릴 때는 팔을 완전히 펴지 않고, 약간 굽힌 상태로 유지합니다.</li>
                        <li>5. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/4HvI_mFhzVQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">인클라인 벤치 프레스 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/inclinebenchpressimg-min.png" alt="인클라인 벤치 프레스">
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