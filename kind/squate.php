<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 스쿼트</title>
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
                <h3><a href="../main/mainSection.php#leg">하체 운동</a></h3>
                <h4>스쿼트</h4>
                <p>하체를 강화하는 대표적인 운동 중 하나입니다. 하체의 전체적인 근육을 강화시키는데 효과적인 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 바벨을 등 뒤에 위치시킵니다.</li>
                        <li>2. 어깨 넓이보다 약간 넓게 발을 벌립니다.</li>
                        <li>3. 가슴을 펴고, 복부를 당기고, 무게 중심을 발 중앙에 위치시킵니다.</li>
                        <li>4. 무릎을 굽히며 천천히 몸을 내립니다.</li>
                        <li>5. 허벅지와 바닥이 평행하게 되는 지점까지 몸을 내립니다.</li>
                        <li>6. 최하점에서 숨을 내쉬며, 힘을 내서 일어납니다.</li>
                        <li>7. 일어서는 과정에서 숨을 들이쉬고, 허리를 곧게 펴고, 무게 중심을 발 중앙에 위치시킵니다.</li>
                        <li>8. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kz84Fc6HGu4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">스쿼트 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/squateimg-min.png" alt="스쿼트">
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