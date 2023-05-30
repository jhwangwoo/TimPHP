<?php
  include "../connect/connect.php";
  include "../connect/session.php";


    if(isset($_SESSION['memberID'])){
        $memberID = $_SESSION['memberID'];
    } else {
        $memberID = 0;
    }   

    if(isset($_GET['uBoardID'])){
        $uBoardID = $_GET['uBoardID'];
    } else {
        Header("Location: Board.php");
    }

    $commentSql = "SELECT * FROM uBoardComment WHERE uBoardID = '$uBoardID' AND uBoardCommentDelete = '0' ORDER BY uBoardCommentID DESC";
    $commentResult = $connect -> query($commentSql);
    $commenInfo = $commentResult -> fetch_array(MYSQLI_ASSOC);

    $memberSql = "SELECT * FROM userMembers WHERE memberID = '$memberID'";
    $memberResult = $connect -> query($memberSql);
    $memberInfo = $memberResult -> fetch_array(MYSQLI_ASSOC);
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
    <style>
        .board__view p a {
            color: #fff;
        }
        .board__contents a {
            color: #fff;
        }
    </style>
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
                <h2>게시글</h2>
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

        $sql = "SELECT * FROM uBoard WHERE uBoardID = {$uBoardID}";
        $result = $connect -> query($sql);

        if($result && $result->num_rows > 0){
            $info = $result -> fetch_array(MYSQLI_ASSOC);

            echo "<div class='board__title'><p>".$info['uBoardTitle']."</p></div>";
            echo "<div class='board__desc'><p>작성자 : ".$info['uBoardAuthor']."<br>등록일 : ".date('Y-m-d', $info['uBoardRegTime'])." / 조회수 : ".$info['uBoardView']."</p></div>";
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
                    echo "<a href='boardModify.php?uBoardID=".$_GET['uBoardID']."' class='btnStyle4 mr5'>수정하기</a>";
                    echo "<a href='boardRemove.php?uBoardID=".$_GET['uBoardID']."' class='btnStyle4' onclick='return confirm(\"삭제하시겠습니까?\")'>삭제하기</a>";
                }
            }
        }
    }
?>
                    <a href="board.php" class="btnStyle4">목록보기</a>
                </div>
                <div class="comment" id="boardComment">
                <script>
                    let commentMemberIDs = {};
                </script>
                <?php 
                    foreach($commentResult as $comment){  ?>
                    <div class="comment__view" id="comment<?=$comment['uBoardCommentID']?>">
                        <div class="avatar">
                        <?php
                            $commentMemberID = $comment['memberID'];
                            // echo $commentMemberID;
                            if($commentMemberID == 0){
                                echo "<img src='../html/assets/img/logo.png' alt='기본 이미지'>";
                            } else {
                                $imgSql = "SELECT userImgSrc FROM userMembers WHERE memberID = '$commentMemberID'";
                                $imgResult = $connect->query($imgSql);
                                $imgInfo = $imgResult->fetch_array(MYSQLI_ASSOC);
                                $userImgSrc = $imgInfo['userImgSrc'];
                                echo "<img src='../assets/profile/$userImgSrc' alt='프로필'>";
                            }
                        ?>
                        </div>
                        <div class="info">
                            <span class="nickname"><?=$comment['uBoardCommentName']?></span>
                            <span class="date"><?=date('Y-m-d', $comment['regTime'])?></span>
                            <p class="msg"><?=$comment['uBoardCommentMsg']?></p>
                            <div class="del">
                                <a href="#" class="comment__del__del">삭제</a>
                                <a href="#" class="comment__del__mod">수정</a>
                            </div>
                        </div>
                    </div>
                    <script>
                        commentMemberIDs["<?=$comment['uBoardCommentID']?>"] = <?=$comment['memberID']?>;
                    </script>
                <?php }?>
                    <!-- 삭제 -->
                    <div class="comment__delete" style="display: none;">
                        <label for="commentDeletePass" class="blind">비밀번호</label>
                        <input type="password" id="commentDeletePass" name="commentDeletePass" placeholder="비밀번호">
                        <button id="commentDeleteCancel">취소</button>
                        <button id="commentDeleteButton">삭제</button>
                    </div>
                    <!-- //삭제 -->
                    <!-- 수정 -->
                    <div class="comment__modify" style="display: none;">
                        <label for="commentModifyMsg" class="blind">수정 내용</label>
                        <textarea name="commentModifyMsg" id="commentModifyMsg" cols rows="4" placeholder="수정할 내용을 적어주세요!" maxlength="255" required></textarea>
                        <label for="commentModifyPass" class="blind">비밀번호</label>
                        <input type="password" id="commentModifyPass" name="commentModifyPass" placeholder="비밀번호" required>
                        <button id="commentModifyCancel">취소</button>
                        <button id="commentModifyButton">수정</button>
                    </div>
                    <!-- //수정 -->
                    <div class="comment__write">
                        <form action="#">
                            <fieldset>
                                <legend class="blind">댓글 쓰기</legend>
                                <?php
                                    if(!isset($_SESSION['memberID'])){ ?>
                                    <!-- 비회원 댓글 쓰기 -->
                                        <label for="commentPass" class="blind">비밀번호</label>
                                        <input type="password" id="commentPass" name="commentPass" placeholder="비밀번호" required>
                                        <label for="commentName" class="blind">이름</label>
                                        <input type="text" id="commentName" name="commentName" placeholder="이름" required>
                                    <!-- //비회원 댓글 쓰기 -->
                                    <?php } else { ?>
                                    <!-- 회원 댓글 쓰기 -->
                                        <label for="commentPass" class="blind">비밀번호</label>
                                        <input type="hidden" id="commentPass" name="commentPass" placeholder="비밀번호" value="<?=$memberInfo['userPass']?>">
                                        <label for="commentName" class="blind">이름</label>
                                        <input type="hidden" id="commentName" name="commentName" placeholder="이름" value="<?=$memberInfo['userNickname']?>">
                                    <!-- //회원 댓글 쓰기 -->
                                    <?php }
                                ?>
                                <textarea id="commentWrite" name="commentWrite" rows="4" placeholder="댓글을 써주세요!" maxlength="255" required></textarea>
                                <button type="button" id="commentWriteBtn" class="btnStyle4 mt10">댓글쓰기</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        <?php include "../include/footer.php"; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    let uBoardCommentID = "";
    let memberID = <?php echo json_encode($_SESSION['memberID']); ?>;
        // 댓글 수정 버튼
        $(".comment__del__mod").click(function(e){
            e.preventDefault();
            //alert("댓글 수정 버튼 누름");
            $(this).parent().before($(".comment__modify"));
            uBoardCommentID = $(this).parent().parent().parent().attr("id");

            let commentMemberID = commentMemberIDs[uBoardCommentID.replace("comment", "")]; // commentMemberID 가져오기
            if(commentMemberID == memberID || commentMemberID == 0){
                $(".comment__modify").show();
                $(".comment__delete").hide();
            } else {
                alert("권한이 없습니다.");
                $(".comment__modify").hide();
            }
        });
        // 댓글 수정 버튼 --> 취소 버튼
        $("#commentModifyCancel").click(function(){
            $(".comment__modify").hide();
        });
        // 댓글 수정 버튼 --> 수정 버튼
        $("#commentModifyButton").click(function(){
            let number = uBoardCommentID.replace(/[^0-9]/g, "");
            if($("#commentModifyPass").val() == ""){
                alert("댓글 작성시 비밀번호를 작성해주세요!");
                $("#commentModifyButton").focus();
            } else {
                $.ajax({
                    url: "BoardCommentModify.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        "commentMsg": $("#commentModifyMsg").val(),
                        "commentPass": $("#commentModifyPass").val(),
                        "uBoardCommentID": number,
                    },
                    success: function(data){
                        console.log(data);
                        if(data.result == "bad"){
                            alert("비밀번호가 틀렸습니다.!");
                        } else {
                            alert("댓글이 수정되었습니다.");
                        }
                        location.reload();
                    },
                    error: function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        });
        // 댓글 삭제 버튼
        $(".comment__del__del").click(function(e){
            e.preventDefault();
            //alert("댓글 삭제 버튼 누름");
            $(this).parent().before($(".comment__delete"));
            uBoardCommentID = $(this).parent().parent().parent().attr("id");

            let commentMemberID = commentMemberIDs[uBoardCommentID.replace("comment", "")]; // commentMemberID 가져오기
            if(commentMemberID == memberID || commentMemberID == 0){
                $(".comment__delete").show();
                $(".comment__modify").hide()
            } else {
                alert("권한이 없습니다.");
                $(".comment__delete").hide();
            }
        });
        // 댓글 삭제 버튼 -> 취소 버튼
        $("#commentDeleteCancel").click(function(){
            $(".comment__delete").hide();
        });
        // 댓글 삭제 버튼 -> 삭제 버튼
        $("#commentDeleteButton").click(function(){
            let number = uBoardCommentID.replace(/[^0-9]/g, "");
            if($("#commentDeletePass").val() == ""){
                alert("댓글 작성시 비밀번호를 작성해주세요!");
                $("#commentDeletePass").focus();
            } else {
                $.ajax({
                    url: "BoardCommentDelete.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        "commentPass": $("#commentDeletePass").val(),
                        "uBoardCommentID": number,
                    },
                    success: function(data){
                        console.log(data);
                        if(data.result == "bad"){
                            alert("비밀번호가 틀렸습니다.!");
                        } else {
                            alert("댓글이 삭제되었습니다.");
                        }
                        location.reload();
                    },
                    error: function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        });
        // 댓글 쓰기 버튼
        $("#commentWriteBtn").click(function(){
            $("#boardComment").focus();
            if($("#commentWrite").val() == ""){
                alert("댓글을 작성해주세요!");
                $("#commentWrite").focus();
            } else {
                $.ajax({
                    url: "BoardCommentWrite.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        "uBoardID": <?=$uBoardID?>,
                        "memberID": <?=$memberID?>,
                        "name": $("#commentName").val(),
                        "pass": $("#commentPass").val(),
                        "msg": $("#commentWrite").val(),
                    },
                    success: function(data){
                        console.log(data);
                        location.reload();
                    },
                    error: function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                });
            }
        });
    </script>
</body>
</html>