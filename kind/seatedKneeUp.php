<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 시티드 니업</title>
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
                <h4>시티드 니업</h4>
                <p>복근 중 하나인 하복근을 강화하는 운동입니다. 다리를 굽혀 무릎을 들어 올리는 동작을 통해 하복근을 수축시킵니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 의자에 앉아 양 발을 바닥에 꽂습니다.</li>
                        <li>2. 손바닥을 위로 하고 무릎을 굽혀 들어올립니다.</li>
                        <li>3. 상체를 약간 뒤로 기울여 하복근을 더욱 강조합니다.</li>
                        <li>4. 상체를 앞으로 숙여 다리를 놓습니다.</li>
                        <li>5. 다리를 다시 올리면서 하복근을 수축시킵니다.</li>
                        <li>6. 천천히 다리를 내려놓습니다.</li>
                        <li>7. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 10~15 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/IS7eqOwHhnc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">시티드 니업 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/sitedkneeupimg.png" alt="시티드 니업">
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