<?php
  include "../connect/connect.php";
  include "../connect/session.php";
  include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMMUNITY</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- SCRIPT -->
    <script defer src="../html/assets/js/common.js"></script>
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
        <div class="board__box">
            <div class="board__view">
                <h2>COMMUNITY</h2>
                <div class="board__main">
                    <!-- <div class="board__title"><p>벤치 프레스하는 방법</p></div>
                    <div class="board__desc">
                        <p>
                            작성자 : 신동진<br>
                            등록일 : 2023-04-20 / 조회수 : 100
                        </p>
                    </div>
                    <div class="board__contents">
                        1. 바벨을 벤치에 올려놓습니다. 바벨이 가운데 위치하도록 조정합니다.<br>
                        2. 바벨을 잡고, 어깨 넓이 정도로 발을 벌립니다. 바벨을 어깨 너비로 잡고, 손목이 무릎과 같은 방향을 바라보도록 합니다.<br>
                        3. 가슴을 내밀고, 등을 굽힙니다. 이때 바벨은 가슴 근처로 내려옵니다.<br>
                        4. 바벨을 가슴까지 내려놓고, 다시 위로 밀어 올립니다. 이때 팔꿈치는 몸쪽으로 붙이며, 팔 전체를 사용하여 바벨을 밀어 올립니다.<br>
                        5. 위와 같은 방식으로 8-12회까지 반복합니다.
                    </div> -->
<?php
    // 게시글 번호 확인
    if(isset($_GET['uBoardID'])) {
        $uBoardID = $_GET['uBoardID'];

        // 보드 뷰 + 1
        $sql = "UPDATE uBoard SET uBoardView = uBoardView + 1 WHERE uBoardID = {$uBoardID}";
        $connect -> query($sql);

        $sql = "SELECT b.uBoardContents, b.uBoardTitle, m.userNickname, b.uBoardRegTime, b.uBoardView FROM uBoard b JOIN userMembers m ON(m.memberID = b.memberID) WHERE b.uBoardID = {$uBoardID}";
        $result = $connect -> query($sql);

        if($result && $result->num_rows > 0){
            $info = $result -> fetch_array(MYSQLI_ASSOC);

            echo "<div class='board__title'><p>".$info['uBoardTitle']."</p></div>";
            echo "<div class='board__desc'><p>작성자 : ".$info['userName']."<br>등록일 : ".date('Y-m-d', $info['uBoardRegTime'])." / 조회수 : ".$info['uBoardView']."</p></div>";
            echo htmlspecialchars_decode("<div class='board__contents'>".$info['uBoardContents']."</div>");
            // htmlspecialchars_decode 텍스트를 디코딩해서 불러옴

        } else {
            // echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
            echo "<script>alert('게시글이 없습니다.');location.href = 'board.php';</script>";
        }
    } else {
        // echo "<tr><td colspan='5'>잘못된 접근입니다.</td></tr>";
        echo "<script>alert('잘못된 접근입니다.');location.href = 'board.php';</script>";
    }
?>
                </div>
                <div class="board__btn">
                    <!-- <a href="boardModify.php" class="btnStyle4">수정하기</a>
                    <a href="boardRemove.php" class="btnStyle4">삭제하기</a> -->
<?php
    if (isset($_GET['uBoardID'])){
        if ($result && $result->num_rows > 0){
            $sql = "SELECT memberID FROM uBoard WHERE uBoardID = {$uBoardID}";
            $result2 = $connect -> query($sql);
            $userID = $result2->fetch_assoc();
            // 로그인 여부 확인
            if(isset($_SESSION['memberID'])){
                if($userID['memberID'] == $_SESSION['memberID']){
                    echo "<a href='mypageBoardModify.php?uBoardID=".$_GET['uBoardID']."' class='btnStyle4 mr5'>수정하기</a>";
                    echo "<a href='mypageBoardRemove.php?uBoardID=".$_GET['uBoardID']."' class='btnStyle4' onclick='return confirm(\"삭제하시겠습니까?\")'>삭제하기</a>";
                }
            }
        }
    }
?>
                    <a href="mypageBoard.php" class="btnStyle4">목록보기</a>
                </div>
            </div>
        </div> 
        <?php include "../include/footer.php"; ?>
    </div>
</body>
</html>