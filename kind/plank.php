<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 플랭크</title>
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
                <h3><a href="../main/mainSection.php#leg">복근 운동</a></h3>
                <h4>플랭크</h4>
                <p>전신 근력운동으로, 주로 복부, 허리, 엉덩이, 팔뚝, 어깨와 같은 다양한 근육군을 강화하는 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 발을 어깨 너비로 벌리고 팔꿈치를 바닥에 대고 엎드립니다.</li>
                        <li>2. 팔꿈치를 어깨에 정렬하고 팔꿈치, 어깨, 골반, 무릎, 발목이 일직선을 이루도록 합니다.</li>
                        <li>3. 복부와 둔근을 수축하여 몸을 곧게 유지합니다.</li>
                        <li>4. 이 자세를 유지하며 최대한 오래 버티는 것이 목표입니다.</li>
                        <li>5. 이 자세를 유지하면서 시간을 오래 버티고 보통 3-4 세트를 반복해줍니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/v54Jtmi2BwU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">플랭크 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/plankimg-min.png" alt="플랭크">
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