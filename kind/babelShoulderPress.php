<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 바벨 숄더 프레스</title>
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
                <h3><a href="../main/mainSection.php#shoulder">어깨 운동</a></h3>
                <h4>바벨 숄더 프레스</h4>
                <p>어깨 근육을 강화하는 운동 중 하나로, 바벨을 사용하여 수행합니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 바벨을 잡을 때는 어깨 너비보다 넓게 잡으면 어깨 관절에 스트레스가 많이 가기 때문에 어깨 너비 정도로 잡는 것이 좋습니다. 손목은 바깥쪽을 향하도록 하고, 손가락은 바벨을 감싸도록 합니다.</li>
                        <li>2. 바벨은 어깨 높이나 약간 위쪽에 위치하도록 합니다. 바벨을 들어올리는 동작에서는 허리가 굽지 않도록 주의합니다.</li>
                        <li>3. 호흡을 들이며 바벨을 천천히 밀어올립니다. 팔꿈치는 몸 쪽으로 들어오도록 하고, 손목을 돌리지 않도록 합니다. 상체가 뒤로 기울어지지 않도록 주의합니다.</li>
                        <li>4. 바벨을 천천히 내려놓을 때는 호흡을 내쉬면서 내립니다. 바벨을 내리는 동안에도 상체는 고정된 자세를 유지해야 합니다.</li>
                        <li>5. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/EoGMVSORHtM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">바벨 숄더 프레스 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/babelshoulderpressimg-min.png" al t="바벨 숄더 프레스">
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