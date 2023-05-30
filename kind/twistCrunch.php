<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 트위스트 크런치</title>
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
                <h4>트위스트 크런치</h4>
                <p>복근 운동 중 하나로, 허리와 복부 근육을 강화하는 운동입니다. 크런치에서 업그레이드 버전입니다. 리듬감이 필요로 합니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 바닥에 눕습니다. 무릎을 굽히고 발을 바닥에 붙여 편안한 자세를 취합니다.</li>
                        <li>2. 양손은 귀 뒤에 위치시키고 팔꿈치를 벌려줍니다.</li>
                        <li>3. 상체를 일으켜 어깨 높이까지 올려줍니다.</li>
                        <li>4. 상체를 일으키면서 동시에 한쪽 무릎을 굽혀 반대쪽 팔꿈치와 만나게 합니다. 이때 반대쪽 다리는 바닥에 고정합니다.</li>
                        <li>5. 다시 원래 자세로 돌아오고 반대쪽으로 동일한 동작을 반복합니다.</li>
                        <li>6. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 10~15 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/O2qF_Q3yrPQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">트위스트 크런치 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/twistcrunchimg-min.png" alt="트위스트 크런치">
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