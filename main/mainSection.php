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
                <div class="slider">
                    <img src="../html/assets/img/slider_01.png" class="img__logo">
                </div>
            </div>
        </div>
        <!-- banner -->
        <div class="main__section">
            <div class="section__title">
                <h3 class="title">운동 종류</h3>
                <p class="desc">
                    운동 종류별 운동 기구에 대한 사용 방법을 알려주는 곳입니다.
                </p>
            </div>  
            <div class="section1">
                <div class="product-carousel-container">
                    <h3 id="chest">가슴 운동</h3>
                    <ul class="product-carousel">
                        <li class="item-1">
                            <img src="../html/assets/img/chest01.jpg" alt="벤치 프레스">
                            <div class="card__body">
                                <h3 class="title">벤치 프레스</h3>
                                <p class="desc">복부근을 강화하는 운동 중 하나입니다. 복부근 중에서도 상복부의 근력을 강화하는데 효과적인 운동입니다.</p>
                                <a href="../kind/benchPress.php?category=chest" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-2">
                            <img src="../html/assets/img/chest02.jpg" alt="인클라인 벤치프레스">
                            <div class="card__body">
                                <h3 class="title">인클라인 벤치프레스</h3>
                                <p class="desc">가슴의 상부 근육을 강화하는데 효과적인 운동입니다.</p>
                                <a href="../kind/inclineBenchPress.php?category=chest" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-3">
                            <img src="../html/assets/img/chest03.jpg" alt="딥스">
                            <div class="card__body">
                                <h3 class="title">딥스</h3>
                                <p class="desc">가슴의 하부 근육을 강화하는데 효과적인 운동입니다.</p>
                                <a href="../kind/dips.php?category=chest" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-4">
                            <img src="../html/assets/img/chest04.jpg" alt="덤벨 벤치 프레스">
                            <div class="card__body">
                                <h3 class="title">덤벨 벤치 프레스</h3>
                                <p class="desc">가슴의 전체 근육을 강화하는 데 효과적인 운동입니다.  바벨 벤치 프레스와는 또 다른 효과를 얻을 수 있습니다.</p>
                                <a href="../kind/dumbbelBenchPress.php?category=chest" class="btn">사용 방법 확인하기</a>
                            </div>     
                        </li>
                        <li class="item-5">
                            <img src="../html/assets/img/chest05.jpg" alt="인클라인 덤벨 벤치 프레스">
                            <div class="card__body">
                                <h3 class="title">인클라인 덤벨 벤치 프레스</h3>
                                <p class="desc">가슴의 상부 근육을 강화하는데 효과적인 운동입니다. 인클라인 바벨 벤치 프레스와는 또 다른 효과를 얻을 수 있습니다.</p>
                                <a href="../kind/inclineDumbbelBenchPress.php?category=chest" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-6">
                            <img src="../html/assets/img/chest06.jpg" alt="덤벨 플라이">
                            <div class="card__body">
                                <h3 class="title">덤벨 플라이</h3>
                                <p class="desc">가슴근육을 강화하는 운동 중 하나로, 가슴에 큰 자극을 주면서 가슴을 확장하는 효과가 있습니다. 덤벨을 이용하여 수평으로 벌어진 팔을 서서히 위로 들어 올리면서 가슴을 확장시키는 것이 특징입니다.</p>
                                <a href="../kind/dumbbelFly.php?category=chest" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                    </ul>
                    <div class="product-carousel-nav">
                        <button class="carousel-nav prev"></button>
                        <button class="carousel-nav next"></button>
                    </div>
                    <div class="carousel-dots">
                      <ul>
                          <li class="active"></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                      </ul>
                    </div>
                </div>
            </div>
            
            <div class="section2">
                <div class="product-carousel-container">
                    <h3 id="back">등 운동</h3>
                    <ul class="product-carousel">
                        <li class="item-1">
                            <img src="../html/assets/img/back01.jpg" alt="데드리프트">
                            <div class="card__body">
                                <h3 class="title">데드리프트</h3>
                                <p class="desc">전신운동으로 대표적인 무게운동 중 하나입니다. 상체, 하체 거의 모든 근육을 사용하여 효과적인 운동입니다.</p>
                                <a href="../kind/deadLift.php?category=back" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-2">
                            <img src="../html/assets/img/back02.jpg" alt="바벨 로우">
                            <div class="card__body">
                                <h3 class="title">바벨 로우</h3>
                                <p class="desc">대표적인 등운동 중 하나입니다. 등근육뿐만 아니라 여러 근육을 함께 사용하는 복합 운동으로, 상체근력을 증가시키는 데 효과적입니다.</p>
                                <a href="../kind/babelLow.php?category=back" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-3">
                            <img src="../html/assets/img/back03.jpg" alt="덤벨 로우">
                            <div class="card__body">
                                <h3 class="title">덤벨 로우</h3>
                                <p class="desc">등근육을 강화시키는 운동 중 하나로, 바벨로우와 마찬가지로 등 전체뿐만 아니라 이두근과 삼두근도 함께 사용되는 복합 운동입니다. 단, 바벨 대신 덤벨을 사용하여 수행하는 점이 다릅니다.</p>
                                <a href="../kind/dumbbelLow.php?category=back" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-4">
                            <img src="../html/assets/img/back04.jpg" alt="풀업">
                            <div class="card__body">
                                <h3 class="title">풀업(턱걸이)</h3>
                                <p class="desc">상체근육을 강화시키는 대표적인 운동 중 하나입니다. 주로 등, 이두근, 삼두근 등 상체 전체의 근육을 강화시키며, 몸을 들어올리는 동작에서 코어 근육도 함께 사용됩니다.</p>
                                <a href="../kind/pullUp.php?category=back" class="btn">사용 방법 확인하기</a>
                            </div>       
                        </li>
                        <li class="item-5">
                            <img src="../html/assets/img/back05.jpg" alt="시티드 로우">
                            <div class="card__body">
                                <h3 class="title">시티드 로우</h3>
                                <p class="desc">등근육을 주로 타겟하는 대표적인 운동 중 하나입니다. 시티드 로우는 시트에 앉아서 수행되며, 일반적으로 바벨이나 케이블을 사용하여 수행합니다.</p>
                                <a href="../kind/seatedLow.php?category=back" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-6">
                            <img src="../html/assets/img/back06.jpg" alt="렛풀 다운">
                            <div class="card__body">
                                <h3 class="title">렛풀 다운</h3>
                                <p class="desc">등 근육과 이두 근육을 강화하는 대표적인 운동 중 하나입니다. 렛풀 다운은 렛풀 머신을 사용하여 수행합니다.</p>
                                <a href="../kind/latPullDown.php?category=back" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                    </ul>
                    <div class="product-carousel-nav">
                        <button class="carousel-nav prev"></button>
                        <button class="carousel-nav next"></button>
                    </div>
                    <div class="carousel-dots">
                      <ul>
                          <li class="active"></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                      </ul>
                    </div>
                </div>
            </div>  

            <div class="section3">
                <div class="product-carousel-container">
                    <h3 id="leg">하체 운동</h3>
                    <ul class="product-carousel">
                        <li class="item-1">
                            <img src="../html/assets/img/leg01.jpg" alt="스쿼트">
                            <div class="card__body">
                                <h3 class="title">스쿼트</h3>
                                <p class="desc">하체를 강화하는 대표적인 운동 중 하나입니다. 하체의 전체적인 근육을 강화시키는데 효과적인 운동입니다.</p>
                                <a href="../kind/squate.php?category=leg" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-2">
                            <img src="../html/assets/img/leg02.jpg" alt="런지">
                            <div class="card__body">
                                <h3 class="title">런지</h3>
                                <p class="desc">하체를 강화하는 운동 중 하나로, 전면 하체인 대퇴근, 종아리, 엉덩이 근육 등을 강화할 수 있습니다.</p>
                                <a href="../kind/lunge.php?category=leg" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-3">
                            <img src="../html/assets/img/leg03.jpg" alt="레그 익스텐션">
                            <div class="card__body">
                                <h3 class="title">레그 익스텐션</h3>
                                <p class="desc">레그 익스텐션은 대퇴사두 근육을 주로 강화하는 하체 운동 중 하나입니다. 다리 앞쪽을 중심으로 근육을 강화할 수 있습니다.</p>
                                <a href="../king/legExtension.php?category=leg" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-4">
                            <img src="../html/assets/img/leg04.jpg" alt="레그 컬">
                            <div class="card__box">
                                <div class="card__body">
                                    <h3 class="title">레그 컬</h3>
                                    <p class="desc">레그 컬은 대퇴이두와 비복근(바깥쪽)허벅지의 근육을 주로 타겟으로 하는 하체 운동 중 하나입니다.</p>
                                    <a href="../kind/legCurl.php?category=leg" class="btn">사용 방법 확인하기</a>
                                </div>
                            </div>          
                        </li>
                        <li class="item-5">
                            <img src="../html/assets/img/leg05.jpg" alt="레그 프레스">
                            <div class="card__box">
                                <div class="card__body">
                                    <h3 class="title">레그 프레스</h3>
                                    <p class="desc">대표적인 하체 근력 운동 중 하나로, 대퇴사두근, 대둔근, 종아리 근육 등 하체 근육을 강화하는데 효과적입니다.</p>
                                    <a href="../kind/legPress.php?category=leg" class="btn">사용 방법 확인하기</a>
                                </div>
                            </div>
                        </li>
                        <li class="item-6">
                            <img src="../html/assets/img/leg06.jpg" alt="카프레이즈">
                            <div class="card__body">
                                <h3 class="title">카프레이즈</h3>
                                <p class="desc">종아리 근육을 강화하는 운동입니다. 주로 머신을 이용해서 수행하지만  머신이 없으면 집에서도 충분히 맨몸으로도 자극 효과를 얻는데 가능합니다.</p>
                                <a href="../kind/calfRaise.php?category=leg" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                    </ul>
                    <div class="product-carousel-nav">
                        <button class="carousel-nav prev"></button>
                        <button class="carousel-nav next"></button>
                    </div>
                    <div class="carousel-dots">
                      <ul>
                          <li class="active"></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                      </ul>
                    </div>
                </div>
            </div> 

            <div class="section4">
                <div class="product-carousel-container">
                    <h3 id="shoulder">어깨 운동</h3>
                    <ul class="product-carousel">
                        <li class="item-1">
                            <img src="../html/assets/img/shoulder01.jpg" alt="바벨 숄더 프레스">
                            <div class="card__body">
                                <h3 class="title">바벨 숄더 프레스</h3>
                                <p class="desc">어깨 근육을 강화하는 운동 중 하나로, 바벨을 사용하여 수행합니다.</p>
                                <a href="../kind/babelShoulderPress.php?category=shoulder" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-2">
                            <img src="../html/assets/img/shoulder02.jpg" alt="덤벨 숄더 프레스">
                            <div class="card__body">
                                <h3 class="title">덤벨 숄더 프레스</h3>
                                <p class="desc">바벨 숄더 프레스와 비슷하지만, 덤벨을 사용하여 어깨 근육을 강화하는 운동입니다.</p>
                                <a href="../kind/dumbbelShoulderPress.php?category=shoulder" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-3">
                            <img src="../html/assets/img/shoulder03.jpg" alt="리버스 펙덱 플라이">
                            <div class="card__body">
                                <h3 class="title">리버스 펙덱 플라이</h3>
                                <p class="desc">등과 어깨 근육을 강화하는 운동으로, 기구를 사용하는 운동 중 하나입니다. 어깨 후면을 자극을 주는데 효과적인 운동입니다.</p>
                                <a href="../kind/reversePecDeckFly.php?category=shoulder" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-4">
                            <img src="../html/assets/img/shoulder04.jpg" alt="사이드 레터럴 레이즈">
                            <div class="card__body">
                                <h3 class="title">사이드 레터럴 레이즈</h3>
                                <p class="desc">어깨 근육 중 측면 어깨 근육을 강화하는 운동입니다.</p>
                                <a href="../kind/sideLatteralRaise.php?category=shoulder" class="btn">사용 방법 확인하기</a>
                            </div>        
                        </li>
                        <li class="item-5">
                            <img src="../html/assets/img/shoulder05.jpg" alt="프런트 레터럴 레이즈">
                            <div class="card__body">
                                <h3 class="title">프런트 레터럴 레이즈</h3>
                                <p class="desc">어깨 근육 중 전면 어깨 근육을 강화하는 운동입니다.</p>
                                <a href="../kind/frontLatteralRaise.php?category=shoulder" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-6">
                            <img src="../html/assets/img/shoulder06.jpg" alt="벤트 오버 레터럴 레이즈">
                            <div class="card__body">
                                <h3 class="title">벤트 오버 레터럴 레이즈</h3>
                                <p class="desc">어깨 근육 중 후면 어깨 근육을 강화하는 운동입니다.</p>
                                <a href="../kind/ventOverLatteralRaise.php?category=shoulder" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                    </ul>
                    <div class="product-carousel-nav">
                        <button class="carousel-nav prev"></button>
                        <button class="carousel-nav next"></button>
                    </div>
                    <div class="carousel-dots">
                      <ul>
                          <li class="active"></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                      </ul>
                    </div>
                </div>
            </div> 

            <div class="section5">
                <div class="product-carousel-container">
                    <h3 id="arm">팔 운동</h3>
                    <ul class="product-carousel">
                        <li class="item-1">
                            <img src="../html/assets/img/arm01.jpg" alt="바벨 컬">
                            <div class="card__body">
                                <h3 class="title">바벨 컬</h3>
                                <p class="desc">상체 운동 중 대표적인 팔 운동 중 하나입니다. 주로 이두근을 발달시키는 데 효과적인 운동입니다.</p>
                                <a href="../kind/babelCurl.php?category=arm" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-2">
                            <img src="../html/assets/img/arm02.jpg" alt="덤벨 컬">
                            <div class="card__body">
                                <h3 class="title">덤벨 컬</h3>
                                <p class="desc">팔뚝의 이두근을 강화하는 운동 중 하나로, 덤벨을 이용하여 수행됩니다.</p>
                                <a href="../kind/dumbbelCurl.php?category=arm" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-3">
                            <img src="../html/assets/img/arm03.jpg" alt="트라이셉스 익스텐션">
                                <div class="card__body">
                                    <h3 class="title">트라이셉스 익스텐션</h3>
                                    <p class="desc">팔의 후면에 위치한 삼두근을 강화하는 운동입니다.</p>
                                    <a href="../kind/lyingTricepsExtension.php?category=arm" class="btn">사용 방법 확인하기</a>
                                </div>
                        </li>
                        <li class="item-4">
                            <img src="../html/assets/img/arm04.jpg" alt="푸쉬 업">
                            <div class="card__body">
                                <h3 class="title">푸쉬 업</h3>
                                <p class="desc">상체와 코어의 근력을 향상시키는 기본적인 운동 중 하나입니다.</p>
                                <a href="../kind/pushUp.php?category=arm" class="btn">사용 방법 확인하기</a>
                            </div>       
                        </li>
                        <li class="item-5">
                            <img src="../html/assets/img/arm05.jpg" alt="케이블 컬">
                            <div class="card__body">
                                <h3 class="title">케이블 암컬</h3>
                                <p class="desc">케이블 머신을 이용한 상체운동 중 하나로, 이두근을 강화하는 운동입니다.</p>
                                <a href="../kind/cableArmCurl.php?category=arm" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-6">
                            <img src="../html/assets/img/arm06.jpg" alt="케이블 푸쉬 다운">
                            <div class="card__body">
                                <h3 class="title">케이블 푸쉬 다운</h3>
                                <p class="desc">케이블 머신을 사용한 삼두근 운동 중 하나입니다.</p>
                                <a href="../kind/cablePushDown.php?category=arm" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                    </ul>
                    <div class="product-carousel-nav">
                        <button class="carousel-nav prev"></button>
                        <button class="carousel-nav next"></button>
                    </div>
                    <div class="carousel-dots">
                      <ul>
                          <li class="active"></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                      </ul>
                    </div>
                </div>
            </div> 

            <div class="section6">
                <div class="product-carousel-container">
                    <h3 id="abs">복근 운동</h3>
                    <ul class="product-carousel">
                        <li class="item-1">
                            <img src="../html/assets/img/abs01.jpg" alt="크런치">
                            <div class="card__body">
                                <h3 class="title">크런치</h3>
                                <p class="desc">복부근을 강화하는 운동 중 하나입니다. 복부근 중에서도 상복부의 근력을 강화하는데 효과적인 운동입니다.</p>
                                <a href="../kind/crunch.php?category=abs" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-2">
                            <img src="../html/assets/img/abs02.jpg" alt="레그레이즈">
                            <div class="card__body">
                                <h3 class="title">레그레이즈</h3>
                                <p class="desc">바벨 숄더 프레스와 비슷하지만, 덤벨을 사용하여 어깨 근육을 강화하는 운동입니다.</p>
                                <a href="../kind/legRaise.php?category=abs" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-3">
                            <img src="../html/assets/img/abs03.jpg" alt="시티드 니업">
                            <div class="card__body">
                                <h3 class="title">시티드 니업</h3>
                                <p class="desc">복근 중 하나인 하복근을 강화하는 운동입니다. 다리를 굽혀 무릎을 들어 올리는 동작을 통해 하복근을 수축시킵니다.</p>
                                <a href="../kind/seatedKneeUp.php?category=abs" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-4">
                            <img src="../html/assets/img/abs04.jpg" alt="행잉 레그레이즈">
                            <div class="card__body">
                                <h3 class="title">행잉 레그레이즈</h3>
                                <p class="desc">복근운동 중 하나로, 바에 매달려서 다리를 들어올리는 운동입니다. 주로 하복부의 하부 근육을 강화하는 데 효과적입니다. 바에 매달려서 하는 운동이다 보니 전완근의 근력도 필요로 합니다.</p>
                                <a href="../kind/hangingLegRaise.php?category=abs" class="btn">사용 방법 확인하기</a>
                            </div>        
                        </li>
                        <li class="item-5">
                            <img src="../html/assets/img/abs05.jpg" alt="트위스트 크런치">
                            <div class="card__body">
                                <h3 class="title">트위스트 크런치</h3>
                                <p class="desc">복근 운동 중 하나로, 허리와 복부 근육을 강화하는 운동입니다. 크런치에서 업그레이드 버전입니다. 리듬감이 필요로 합니다.</p>
                                <a href="../kind/twistCrunch.php?category=abs" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                        <li class="item-6">
                            <img src="../html/assets/img/abs06.jpg" alt="플랭크">
                            <div class="card__body">
                                <h3 class="title">플랭크</h3>
                                <p class="desc">전신 근력운동으로, 주로 복부, 허리, 엉덩이, 팔뚝, 어깨와 같은 다양한 근육군을 강화하는 운동입니다.</p>
                                <a href="../kind/plank.php?category=abs" class="btn">사용 방법 확인하기</a>
                            </div>
                        </li>
                    </ul>
                    <div class="product-carousel-nav">
                        <button class="carousel-nav prev"></button>
                        <button class="carousel-nav next"></button>
                    </div>
                    <div class="carousel-dots">
                      <ul>
                          <li class="active"></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                      </ul>
                    </div>
                </div>
            </div>            
        </div>

        <?php include "../include/footer.php"; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../html/assets/script/mainSection.js"></script>
    <script>
        // 호버 효과
        const cardBody = document.querySelectorAll('.card__body');
        cardBody.forEach(cardBody => {
            // const btn = cardBody.querySelector('.btn');
            cardBody.addEventListener('mouseover', () => {
                // cardBody.querySelector('.card__body').style.backgroundColor = '#7d92b7';
                gsap.to(cardBody, 0.5, {backgroundColor : '#7d92b7'})
            });
            cardBody.addEventListener('mouseout', () => {
                // cardBody.querySelector('.card__body').style.backgroundColor = '#2D303D';
                gsap.to(cardBody, 0.5, {backgroundColor : '#2D303D'})
            });
        });
    </script>
</body>
</html>