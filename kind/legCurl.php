<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 레그 컬</title>
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
                <h4>레그 컬</h4>
                <p>레그 컬은 대퇴이두와 비복근(바깥쪽)허벅지의 근육을 주로 타겟으로 하는 하체 운동 중 하나입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 레그 컬 머신에 앉아 엉덩이를 머신의 시트에 누릅니다. 다리를 펴고 발목 부분을 머신이 제공하는 패드에 닿게 합니다.</li>
                        <li>2. 팔걸이를 잡은 후 다리의 뒷부분과 머신의 패드 사이를 인력으로 붙이도록 합니다.</li>
                        <li>3. 다리의 앞쪽(정면)에 위치한 대퇴이두와 비복근(바깥쪽)허벅지의 근육을 이용하여 패드를 당겨 다리의 뒷부분으로부터 패드를 분리합니다.</li>
                        <li>4. 다리가 완전히 펴질 때까지 패드를 최대한 당긴 후, 천천히 패드를 원래의 위치로 되돌립니다.</li>
                        <li>5. 다리의 뒷부분과 머신의 패드 사이를 최대한 좁게 유지하며 운동을 반복합니다.</li>
                        <li>6. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9w8d_EL-7e4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">레그 컬 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/legcurlimg-min.png" alt="레그 컬">
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