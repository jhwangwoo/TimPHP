<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 레그 프레스</title>
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
                <h4>레그 프레스</h4>
                <p>대표적인 하체 근력 운동 중 하나로, 대퇴사두근, 대둔근, 종아리 근육 등 하체 근육을 강화하는데 효과적입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 레그프레스 머신에 앉습니다. 등받이와 엉덩이를 밀착시켜서 고정합니다.</li>
                        <li>2. 발판에 발을 대고 양쪽 발바닥이 평행하게 맞닿도록 합니다.</li>
                        <li>3. 발판을 밀어서 다리를 펴면서 숨을 들입니다.</li>
                        <li>4. 다리를 최대한 펴서 근력을 유지합니다.</li>
                        <li>5. 천천히 다리를 굽히면서 숨을 내쉽니다.</li>
                        <li>6. 무게가 발목을 넘어갈 때까지 다리를 굽힙니다.</li>
                        <li>7. 다시 발판을 밀면서 다리를 펴고 숨을 들입니다.</li>
                        <li>8. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/EV0F_3S7Sks" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">레그 프레스 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/legpressimg-min.png" alt="레그 프레스">
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