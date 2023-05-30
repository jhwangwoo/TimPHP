<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 행잉 레그레이즈</title>
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
                <h4>행잉 레그레이즈</h4>
                <p>복근운동 중 하나로, 바에 매달려서 다리를 들어올리는 운동입니다. 주로 하복부의 하부 근육을 강화하는 데 효과적입니다. 바에 매달려서 하는 운동이다 보니 전완근의 근력도 필요로 합니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 철봉이나 풀업바에 매달립니다.</li>
                        <li>2. 양손은 어깨너비로 벌립니다.</li>
                        <li>3. 상체는 고정하고 다리를 들어 올립니다. 이때 다리는 일직선이 되도록 합니다.(처음에 복부에 힘이 없으면 다리를 90도로 굽힌 상태에서 해줍니다.)</li>
                        <li>4. 최대한 높이 올린 후, 천천히 원위치로 돌아옵니다.</li>
                        <li>5. 일정 반복 수를 완료한 후, 쉬어가면서 다시 반복합니다.</li>
                        <li>6. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 10~15 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/tNFciUXMy1s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">행잉 레그레이즈 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/hanginglegraiseimg-min.png" alt="행잉 레그레이즈">
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