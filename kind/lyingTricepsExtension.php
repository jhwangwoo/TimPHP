<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 트라이셉스 익스텐션</title>
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
                <h3><a href="../main/mainSection.php#arm">팔 운동</a></h3>
                <h4>트라이셉스 익스텐션</h4>
                <p>팔의 후면에 위치한 삼두근을 강화하는 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 바벨을 양 손으로 원하는 폭으로 잡습니다. 손목은 뒤로 굽혀, 엄지 손가락은 바벨의 반대 방향을 향해 놓습니다.</li>
                        <li>2. 벤치에 눕습니다. 머리 부분은 벤치 끝쪽에 위치하게 됩니다.</li>
                        <li>3. 팔을 귀에 가까이 붙여서 굽힙니다. 팔꿈치는 움직이지 않도록 고정시켜야 합니다.</li>
                        <li>4. 바벨을 천천히 내리며 삼두를 스트레칭합니다. 이때 상체는 바닥과 90도 정도로 유지합니다.</li>
                        <li>5. 팔을 다시 펴서 바벨을 들어올립니다. 이때 상체는 고정된 자세를 유지합니다</li>
                        <li>6. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ogyGQxuxxn4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">트라이셉스 익스텐션 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/tricepsextensionimg.png" alt="트라이셉스 익스텐션">
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