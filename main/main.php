<?php
  include "../connect/connect.php";
  include "../connect/session.php";
//   echo $_SESSION['adminMemberID'], $_SESSION['adminEmail'], $_SESSION['adminName'];
  // echo "<pre>";
  // var_dump($_SESSION);
  // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인 페이지</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">

    <!-- mainAnimation.css -->
    <link rel="stylesheet" href="../html/assets/css/mainAnimation.css">

    <!-- SCRIPT -->
    <script defer src="assets/js/common.js"></script>
</head>
<body>
    <div id="wrap">
        <?php include "../include/skip.php"; ?>
        <!-- //SKIP -->
        <?php include "../include/header.php"; ?>
        <!-- //header -->
        <div class="slider__wrap">
            <div class="slider__img">
                <div class="slider__inner">
                    <div class="slider">
                        <img src="../html/assets/img/slider_01.png" class="img__logo">
                    </div>
                    <div class="slider">
                        <img src="../html/assets/img/slider_02.png" alt="이미지2">
                    </div>
                    <div class="slider">
                        <img src="../html/assets/img/slider_03.png" alt="이미지3">
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->
        <section id="contents">
            <h2><a href="mainSection.php">운동 종류</a></h2>
            <div class="wrapper">
                <div class="cols">
                    <div class="col" ontouchstart="this.classList.toggle('hover');" onclick="window.location.href = 'http:mainSection.php#chest'">
                        <div class="container">
                            <div class="front" style="background-image: url(../html/assets/img/content_01.png)">
                                <div class="inner">
                                    <h3>가슴</h3>
                                    <em>Chest Exersise</em>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <h3>가슴</h3>
                                    <em>Chest Exersise</em>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" ontouchstart="this.classList.toggle('hover');" onclick="window.location.href = 'http:mainSection.php#back'">
                        <div class="container">
                            <div class="front" style="background-image: url(../html/assets/img/content_02.png)">
                                <div class="inner">
                                    <h3>등</h3>
                                    <em>Back Exersise</em>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <h3>등</h3>
                                    <em>Back Exersise</em>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" ontouchstart="this.classList.toggle('hover');" onclick="window.location.href = 'http:mainSection.php#leg'">
                        <div class="container">
                            <div class="front" style="background-image: url(../html/assets/img/content_06.png)">
                                <div class="inner">
                                    <h3>하체</h3>
                                    <em>Lower Body</em>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <h3>하체</h3>
                                    <em>Lower Body</em>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" ontouchstart="this.classList.toggle('hover');" onclick="window.location.href = 'http:mainSection.php#shoulder'">
                        <div class="container">
                            <div class="front" style="background-image: url(../html/assets/img/content_03.png)">
                                <div class="inner">                                
                                    <h3>어깨</h3>
                                    <em>Shoulder Exersise</em>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <h3>어깨</h3>
                                    <em>Shoulder Exersise</em>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" ontouchstart="this.classList.toggle('hover');" onclick="window.location.href = 'http:mainSection.php#arm'">
                        <div class="container">
                            <div class="front" style="background-image: url(../html/assets/img/content_04.png">
                                <div class="inner">
                                    <h3>팔</h3>
                                    <em>Arm Exersise</em>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <h3>팔</h3>
                                    <em>Arm Exersise</em>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" ontouchstart="this.classList.toggle('hover');" onclick="window.location.href = 'http:mainSection.php#abs'">
                        <div class="container">
                            <div class="front" style="background-image: url(../html/assets/img/content_05.png)">
                                <div class="inner">
                                    <h3>복근</h3>
                                    <em>Sit-Up</em>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <h3>복근</h3>
                                    <em>Sit-Up</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contents -->
        <section id="sub">
            <div class="sub__inner">
                <div class="sub1">
                    <div class="sub1__desc">
                        <h3>필수 요소<span><i class="fa-sharp fa-solid fa-circle-check"></i></span></h3>
                        <p>
                            운동을 하려면 필요한 필수 요소가 있습니다.<br>
                            의지, 운동 장비, 운동 자세, 전문가와 상담, 휴식, 식습관, 목표가 있습니다.
                        </p>
                    </div>
                    <div class="sub1__icon__box">
                        <div class="cards">
                            <div class="card">
                                <a href="intro.php#intro3">
                                    <img src="../html/assets/img/sub_icon_01.svg" alt="운동 장비">
                                    <div class="card__text">
                                        <p class="card__title">운동 장비</p>
                                    </div>
                                </a>                                
                            </div>
                            <div class="card">
                                <a href="intro.php#intro3">
                                    <img src="../html/assets/img/sub_icon_02.svg" alt="운동 자세">
                                    <div class="card__text">
                                        <p class="card__title">운동 자세</p>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="intro.php#intro3">
                                    <img src="../html/assets/img/sub_icon_03.svg" alt="운동 계획">
                                    <div class="card__text">
                                        <p class="card__title">운동 계획</p>
                                    </div>
                                </a>                            
                            </div>
                            <div class="card">
                                <a href="intro.php#intro3">
                                    <img src="../html/assets/img/sub_icon_04.svg" alt="운동 계획">
                                    <div class="card__text">
                                        <p class="card__title">식습관 및<br>수분 섭취</p>
                                    </div>
                                </a>                            
                            </div>
                            <div class="card">
                                <a href="intro.php#intro3">
                                    <img src="../html/assets/img/sub_icon_05.svg" alt="운동 계획">
                                    <div class="card__text">
                                        <p class="card__title">운동 목표</p>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="intro.php#intro3">
                                    <img src="../html/assets/img/sub_icon_06.svg" alt="운동 계획">
                                    <div class="card__text">
                                        <p class="card__title">의지</p>
                                    </div>
                                </a>                            
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="sub2">
                    <div class="sub2__icon">
                        <img src="../html/assets/img/sub2_icon_01.svg" alt="주의점">
                    </div>
                    <div class="sub2__desc">
                        <h3>주의점<span><i class="fa-solid fa-triangle-exclamation"></span></h3></i>
                        <p>
                            운동 시 주의할 점이 많습니다.<br>
                            운동을 하기 전에 미리 알아두면 좋습니다.
                        </p>
                        <a href="../main/intro.php#danger">자세히 보기</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- sub -->
        <?php include "../include/footer.php"; ?>
    </div>

    <script src="https://kit.fontawesome.com/2b2e0121f7.js" crossorigin="anonymous"></script>
    <script>      
        const slider = document.querySelectorAll(".slider");
        const sliderInner = document.querySelector(".slider__inner");
        const sliderImg2 = document.querySelector(".slider__img");        

        // 슬라이더
        let currentIndex = 0;
        let sliderCount = slider.length;
        let sliderW = slider[0].offsetWidth;

        sliderInner.style.transition = "all 0.6s";

        setInterval(() => {
            currentIndex = (currentIndex+1) % sliderCount;
            sliderInner.style.transform = "translateX(" + (-sliderW * currentIndex) + "px)";
        }, 3000);


        // 필수요소 슬라이드JS
        const cards = document.querySelector(".cards");
        const images = document.querySelectorAll(".card__img");
        const backgrounds = document.querySelectorAll(".card__bg");
        const range = 40;

        // const calcValue = (a, b) => (((a * 100) / b) * (range / 100) -(range / 2)).toFixed(1);
        const calcValue = (a, b) => (a/b*range-range/2).toFixed(1) // thanks @alice-mx

        let timeout;
        document.addEventListener('mousemove', ({x, y}) => {
          if (timeout) {
            window.cancelAnimationFrame(timeout);
          }
            
          timeout = window.requestAnimationFrame(() => {
            const yValue = calcValue(y, window.innerHeight);
            const xValue = calcValue(x, window.innerWidth);

            cards.style.transform = `rotateX(${yValue}deg) rotateY(${xValue}deg)`;

            [].forEach.call(images, (image) => {
              image.style.transform = `translateX(${-xValue}px) translateY(${yValue}px)`;
            });

            [].forEach.call(backgrounds, (background) => {
              background.style.backgroundPosition = `${xValue*.45}px ${-yValue*.45}px`;
            })
          })
        }, false);

    </script>
</body>
</html>