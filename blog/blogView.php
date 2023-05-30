<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    if(isset($_SESSION['memberID'])){
        $memberID = $_SESSION['memberID'];
    } else {
        $memberID = 0;
    }

    if(isset($_GET['blogID'])){
        $blogID = $_GET['blogID'];
    } else {
        Header("Location: blog.php");
    }

    // 블로그 뷰 +1
    $sql = "UPDATE blog SET blogView = blogView + 1 WHERE blogID = '$blogID'";
    $connect -> query($sql);

    $blogID = $_GET['blogID'];
    $blogSql = "SELECT * FROM blog WHERE blogID = '$blogID'";
    $blogResult = $connect -> query($blogSql);
    $blogInfo = $blogResult -> fetch_array(MYSQLI_ASSOC);

    // 로그인 하면 이름 비밀번호 안 보이게 하기
    $memberSql = "SELECT * FROM userMembers WHERE memberID = '$memberID'";
    $memberResult = $connect -> query($memberSql);
    $memberInfo = $memberResult -> fetch_array(MYSQLI_ASSOC);

    // 댓글 불러오기
    $commentSql = "SELECT * FROM blogComment WHERE blogID = '$blogID' AND commentDelete = '0' ORDER BY commentID DESC";
    $commentResult = $connect -> query($commentSql);
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
<?php
    // 게시글 번호 확인
    if(isset($_GET['blogID'])) {
        $blogID = $_GET['blogID'];

        // 보드 뷰 + 1
        $sql = "UPDATE blog SET blogView = blogView + 1 WHERE blogID = {$blogID}";
        $connect -> query($sql);

        $sql = "SELECT b.blogContents, b.blogTitle, m.userName, b.blogRegTime, b.blogView, b.blogImgFile FROM blog b JOIN userMembers m ON(m.memberID = b.memberID) WHERE b.blogID = {$blogID}";
        $result = $connect -> query($sql);

        if($result && $result->num_rows > 0){
            $info = $result -> fetch_array(MYSQLI_ASSOC);

            echo "<div class='board__title'><p>".$info['blogTitle']."</p></div>";
            echo "<div class='board__desc'><p>작성자 : ".$info['userName']."<br>등록일 : ".date('Y-m-d', $info['blogRegTime'])." / 조회수 : ".$info['blogView']."</p></div>";
            echo "<img src=../assets/blog/".$info['blogImgFile']." alt=".$info['blogTitle'].">";
            echo htmlspecialchars_decode("<div class='board__contents'>".$info['blogContents']."</div>");
            // htmlspecialchars_decode 텍스트를 디코딩해서 불러옴

        } else {
            // echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
            echo "<script>alert('게시글이 없습니다.');location.href = 'blog.php';</script>";
        }
    } else {
        // echo "<tr><td colspan='5'>잘못된 접근입니다.</td></tr>";
        echo "<script>alert('잘못된 접근입니다.');location.href = 'blog.php';</script>";
    }
?>
                </div>
                <div class="board__btn">
                    <!-- <a href="boardModify.php" class="btnStyle4">수정하기</a>
                    <a href="boardRemove.php" class="btnStyle4">삭제하기</a> -->
<?php
    if (isset($_GET['blogID'])){
        if ($result && $result->num_rows > 0){
            $sql = "SELECT memberID FROM blog WHERE blogID = {$blogID}";
            $result2 = $connect -> query($sql);
            $userID = $result2->fetch_assoc();
            // 로그인 여부 확인
            if(isset($_SESSION['memberID'])){
                if($userID['memberID'] == $_SESSION['memberID']){
                    echo "<a href='blogModify.php?blogID=".$_GET['blogID']."' class='btnStyle4 mr5'>수정하기</a>";
                    echo "<a href='blogRemove.php?blogID=".$_GET['blogID']."' class='btnStyle4' onclick='return confirm(\"삭제하시겠습니까?\")'>삭제하기</a>";
                }
            }
        }
    }
?>
                    <a href="board.php" class="btnStyle4">목록보기</a>
                </div>
                <!-- comment -->
                <div class="comment" id="blogComment">
                    <!-- 프로필 불러오기 -->
                    <script>
                        let commentMemberIDs = {};
                    </script>
                    <?php foreach($commentResult as $comment){ ?>
                        <div class="comment__view" id="comment<?=$comment['commentID']?>">
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
                                <span class="nickname"><?=$comment['commentName']?></span>
                                <span class="date"><?=date('Y-m-d', $comment['regTime'])?></span>
                                <p class="msg"><?=$comment['commentMsg']?></p>

                                <div class="del">
                                    <a href="#" class="comment__del__del">삭제</a>
                                    <a href="#" class="comment__del__mod">수정</a>
                                </div>
                            </div>
                        </div>
                        <script>
                            commentMemberIDs["<?=$comment['commentID']?>"] = <?=$comment['memberID']?>;
                        </script>
                    <?php } ?>
                    <!-- //프로필 불러오기 -->

                    <!-- 삭제 -->
                    <div class="comment__delete" style="display: none">
                        <label for="commentDeletePass" class="blind">비밀번호</label>
                        <input type="password" id="commentDeletePass" name="commentDeletePass" placeholder="비밀번호">
                        <button id="commentDeleteCancel">취소</button>
                        <button id="commentDeleteButton">삭제</button>
                    </div>
                    <!-- //삭제 -->

                    <!-- 수정 -->
                    <div class="comment__modify" style="display: none">
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
                                <label for="commentWrite" class="blind">댓글쓰기</label>
                                <textarea id="commentWrite" name="commentWrite" rows="4" placeholder="댓글을 써주세요!" maxlength="255" required></textarea>
                                <button type="button" id="commentWriteBtn" class="btnStyle4 mt10">댓글쓰기</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- //comment -->
            </div>
        </div> 
        <?php include "../include/footer.php"; ?>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        const imgSrc = document.querySelector(".board__main img").src;
        
        if(imgSrc.includes('default')){
            document.querySelector(".board__main img").style.display = "none";
        }

        let commentID = "";
        let memberID = <?php echo json_encode($_SESSION['memberID']); ?>;

        // 댓글 수정 버튼
        $(".comment__del__mod").click(function(e){
            e.preventDefault();
            $(this).parent().before($(".comment__modify"));
            commentID = $(this).parent().parent().parent().attr("id");

            let commentMemberID = commentMemberIDs[commentID.replace("comment", "")]; // commentMemberID 가져오기

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
            let number = commentID.replace(/[^0-9]/g, "");
            if($("#commentModifyPass").val() == ""){
                alert("댓글 작성시 비밀번호를 작성해주세요!");
                $("#commentModifyButton").focus();
            } else {
                $.ajax({
                    url: "blogCommentModify.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        "commentMsg": $("#commentModifyMsg").val(),
                        "commentPass": $("#commentModifyPass").val(),
                        "commentID": number,
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
            commentID = $(this).parent().parent().parent().attr("id");

            let commentMemberID = commentMemberIDs[commentID.replace("comment", "")]; // commentMemberID 가져오기

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
            let number = commentID.replace(/[^0-9]/g, "");
            if($("#commentDeletePass").val() == ""){
                alert("댓글 작성시 비밀번호를 작성해주세요!");
                $("#commentDeletePass").focus();
            } else {
                $.ajax({
                    url: "blogCommentDelete.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        "commentPass": $("#commentDeletePass").val(),
                        "commentID": number,
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
            $("#blogComment").focus();
            if($("#commentWrite").val() == ""){
                alert("댓글을 작성해주세요!");
                $("#commentWrite").focus();
            } else {
                $.ajax({
                    url: "blogCommentWrite.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        "blogID": <?=$blogID?>,
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