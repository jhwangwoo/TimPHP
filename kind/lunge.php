<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 런지</title>
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
                <h3><a href="../main/mainSection.html#leg">하체 운동</a></h3>
                <h4>런지</h4>
                <p>하체를 강화하는 운동 중 하나로, 전면 하체인 대퇴근, 종아리, 엉덩이 근육 등을 강화할 수 있습니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 선 자세에서 양손을 허리에 올려주고, 양발을 어깨너비로 벌려줍니다.</li>
                        <li>2. 한쪽 다리를 앞으로 내밀어 깊게 굽혀줍니다. 앞쪽 무릎은 발끝 방향으로 이동하며, 뒷쪽 무릎은 바닥에 가까이 닿도록 내립니다.</li>
                        <li>3. 앞쪽 발로 몸을 일으키며 뒷발도 따라서 일으켜줍니다.</li>
                        <li>4. 다른 쪽 다리로 반복합니다.</li>
                        <li>5. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7IZtFeqtdGE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">런지 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/squateimg-min.png" alt="런지">
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