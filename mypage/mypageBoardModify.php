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
    <!-- Toast UI Editor -->
    <style>
        .ck-editor__editable { 
            height: 400px;
            color: #000;
        }
    </style>

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
        <div class="board__write">
            <h2>COMMUNITY</h2>
            <form action="mypageBoardModifySave.php" name="mypageBoardModifySave" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend class="blind">게시글 수정하기</legend>
<?php
    $memberID = $_SESSION['memberID'];
    $uBoardID = $_GET['uBoardID'];

    $sql = "SELECT uBoardID, uBoardTitle, uBoardContents FROM uBoard WHERE uBoardID = {$uBoardID} AND memberID = {$memberID}";
    $result = $connect -> query($sql);

    if($result && $result -> num_rows > 0){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        echo "<div style='display:none'><label for='uBoardID'>번호</label><input type='text' id='uBoardID' name='uBoardID' class='inputStyle' value='".$info['uBoardID']."'></div>";
        echo "<div><label for='uBoardTitle'>제목</label><input type='text' id='uBoardTitle' name='uBoardTitle' class='inputStyle' value='".$info['uBoardTitle']."'></div>";
        echo "<div><label for='uBoardContents'>내용</label><textarea name='uBoardContents' id='editor'>".$info['uBoardContents']."</textarea></div>";
        echo "<div class='mt50'><label for='uBoardPass'>비밀번호</label><input type='password' id='uBoardPass' name='uBoardPass' class='inputStyle' autocomplete='off' required placeholder='글을 수정하려면 로그인 비밀번호를 입력하셔야 합니다.'></div>";
        echo "<button type='submit' class='btnStyle4'>수정하기</button>";
    } else {
        echo "<tr><td colspan='4'>작성자만 수정할 수 있습니다.</td></tr>";
    }
?>
                    <!-- <div>
                        <label for="uBoardTitle">제목</label>
                        <input type="text" id="uBoardTitle" name="uBoardTitle" class="inputStyle3">
                    </div>
                    <div>
                        <label for="uBoardContents">내용</label>
                        <textarea name="text" id="uBoardContents" rows="20" class="inputStyle3"></textarea>
                        <textarea name="uBoardContents" id="editor" placeholder="내용을 입력해주세요."></textarea>
                    </div>
                    <div class="mt30">
                        <label for="uBoardFile">파일</label>
                        <input type="file" id="uBoardFile" name="uBoardFile" accept=".jpg, .jpge, .png, .gif" placeholder="jpg, jpge, png, gif 파일만 넣을 수 있습니다. 이미지 용량은 1MB를 넘을 수 없습니다.">
                    </div>
                    <button type="submit" class="btnStyle4">수정하기</button>  -->
                </fieldset>
            </form>
        </div>
        <?php include "../include/footer.php"; ?>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/translations/ko.js"></script>
    <script>
        ClassicEditor.create( document.querySelector( '#editor' ), {
            language: "ko"
        } );
    </script>
</body>
</html>