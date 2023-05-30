<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 밴트 오버 레터럴 레이즈</title>
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
                <h4>밴트 오버 레터럴 레이즈</h4>
                <p>어깨 근육 중 후면 어깨 근육을 강화하는 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 어깨너비로 발을 벌리고, 무게중심을 중심으로 상체를 약간 숙인 자세로 선다.</li>
                        <li>2. 덤벨을 양손에 들고, 손목을 굽히지 않고 팔꿈치를 약간 구부리면서 상체의 왼쪽과 오른쪽 어깨에 위치하도록 한다.</li>
                        <li>3. 천천히 숨을 내쉬면서 덤벨을 들어 옆으로 들어올리는데, 팔꿈치는 약간 구부린 상태로 유지한다. 팔꿈치가 어깨보다 높아지면 더 이상 덤벨을 들어올리지 않는다.</li>
                        <li>4. 덤벨을 정상 위치에서 잠시 유지한 후, 천천히 숨을 들이며 초기 자세로 돌아온다.</li>
                        <li>5. 레이즈는 고립운동이기에 처음에 할때 본인이 할 수 있는 무게로 하다가 점점 무게를 바꿔가면서 수행하도록 하는게 좋습니다.</li>
                        <li>6. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 레이즈 운동은 저중량 고반복으로 하는게 좋습니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/n3aX0oJyvWA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">밴트 오버 레터럴 레이즈 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/ventoverlatteralraiseimg-min.png" alt="밴트 오버 레터럴 레이즈">
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