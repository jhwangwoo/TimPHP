<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 카프레이즈</title>
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
                <h4>카프레이즈</h4>
                <p>종아리 근육을 강화하는 운동입니다. 주로 머신을 이용해서 수행하지만  머신이 없으면 집에서도 충분히 맨몸으로도 자극 효과를 얻는데 가능합니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 바닥에 양발을 어깨 너비로 벌리고 선 자세로 서서, 손은 옆구리에 놓습니다.</li>
                        <li>2. 발끝을 들어 올리면서 종아리 근육을 수축시킵니다. 최대한 발끝을 올리고, 1~2초 정도 유지합니다.</li>
                        <li>3. 발끝을 내려서 출발 자세로 돌아옵니다. 발끝을 바닥에 놓고 1회 운동을 마칩니다.</li>
                        <li>4. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/YmmFMZF8A48" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">카프레이즈 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/calfraiseimg-min.png" alt="카프레이즈">
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