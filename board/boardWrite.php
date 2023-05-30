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
    <title>메인 페이지</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- Toast UI Editor -->
    <style>
        .ck.ck-editor{
            width: 100%;
        }
        .ck-editor__editable {
            height: 600px;
            word-wrap: break-word;
            overflow-wrap: break-word;
            word-break: break-all;
        }
        .ck.ck-button.ck-off {
            color: #fff;
            background-color: #464B5F;
        }
        .ck.ck-button.ck-off:hover {
            color: #000;
        }
        .ck.ck-button__label {
            background-color: #464B5F;
        }
        .ck.ck-icon.ck-icon_inherit-color:hover,
        .ck.ck-button__label:hover {
            color: #000 !important;
        }
        .ck.ck-toolbar.ck-toolbar_grouping {
            background-color: #464B5F;
            border: 3px solid #fff;
        }
        .ck-blurred.ck.ck-content.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline,
        .ck.ck-content.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline.ck-blurred,
        .ck.ck-content.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline.ck-focused {
            background-color: #464B5F;
            border: 3px solid #fff;
            border-radius: 0 0 20px 20px;

        }
        .ck.ck-dropdown.ck-heading-dropdown:hover {
            background-color: #464B5F !important;
        }
        .ck.ck-list__item .ck.ck-button.ck-heading_paragraph.ck-on.ck-button_with-text:hover {
            color: #000;
        }
        .ck.ck-list__item .ck.ck-button.ck-on {
            background-color: #fff;
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
            <h2>게시글 작성</h2>
            <form action="boardWriteSave.php" name="boardWriteSave" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend class="blind">게시글 작성하기</legend>
                    <div>
                        <label for="uBoardTitle">제목</label>
                        <input type="text" id="uBoardTitle" name="uBoardTitle" class="inputStyle3" required>
                    </div>
                    <div>
                        <label for="uBoardContents">내용</label>
                        <!-- <textarea name="text" id="uBoardContents" rows="20" class="inputStyle3"></textarea> -->
                        <textarea name="uBoardContents" id="editor" placeholder="내용을 입력해주세요."></textarea>
                    </div>
                    <div class="mt30">
                        <label for="uBoardFile">파일</label>
                        <input type="file" id="uBoardFile" name="uBoardFile" accept=".jpg, .jpge, .png, .gif" placeholder="jpg, jpge, png, gif 파일만 넣을 수 있습니다. 이미지 용량은 1MB를 넘을 수 없습니다.">
                    </div>
                    <button type="submit" class="btnStyle4">저장하기</button> 
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