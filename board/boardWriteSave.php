<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $memberID = $_SESSION['memberID'];
    $uBoardAuthor = $_SESSION['userNickname'];
    $uBoardCategory = $_POST['uBoardCategory'];

    $uBoardTitle = htmlspecialchars($_POST['uBoardTitle'], ENT_QUOTES, 'UTF-8');
    $uBoardContents =  htmlspecialchars($_POST['uBoardContents'], ENT_QUOTES, 'UTF-8');
    // htmlspecialchars 사용자가 작성한 텍스트 인코딩

    $uBoardView = 1;
    $uBoardLike = 0;
    $regTime = time();

    $uBoardImgFile = $_FILES['uBoardFile'];
    $uBoardImgSize = $_FILES['uBoardFile']['size'];
    $uBoardImgType = $_FILES['uBoardFile']['type'];
    $uBoardImgName = $_FILES['uBoardFile']['name'];
    $uBoardImgTmp = $_FILES['uBoardFile']['tmp_name'];

    // echo $memberID, $uBoardAuthor, $uBoardCategory, $uBoardTitle, $uBoardContents, $uBoardView, $uBoardLike, $regTime;

    // 이미지 파일명 확인
    if($uBoardImgType){
        $fileTypeExtension = explode("/", $uBoardImgType);
        $fileType = $fileTypeExtension[0]; // image
        $fileExtension = $fileTypeExtension[1]; // jpeg

        // 이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $uBoardImgDir = "../assets/board/";
                $uBoardImgName = "Img_".time().rand(1, 99999)."."."{$fileExtension}";
                

                echo "이미지 파일이 맞습니다.";
                $sql = "INSERT INTO uBoard(memberID, uBoardTitle, uBoardContents, uBoardCategory, uBoardAuthor, uBoardView, uBoardLike, uBoardImgFile, uBoardImgSize, uBoardDelete, uBoardRegTime) VALUES('$memberID', '$uBoardTitle', '$uBoardContents', '$uBoardCategory', '$uBoardAuthor', '$uBoardView', '$uBoardLike', '$uBoardImgName', '$uBoardImgSize', '0', '$regTime')";
            } else {
                echo "<script>alert('이미지 파일이 아닙니다.')</script>";
            }
        } else {
            echo "<script>alert('이미지 파일이 아닙니다.')</script>";
        }
    } else {
        echo "이미지 파일을 첨부하지 않았습니다.";
        $sql = "INSERT INTO uBoard(memberID, uBoardTitle, uBoardContents, uBoardCategory, uBoardAuthor, uBoardView, uBoardLike, uBoardImgFile, uBoardImgSize, uBoardDelete, uBoardRegTime) VALUES('$memberID', '$uBoardTitle', '$uBoardContents', '$uBoardCategory', '$uBoardAuthor', '$uBoardView', '$uBoardLike', 'img_default.jpg', '$uBoardImgSize', '0', '$regTime')";
    }

    // 이미지 사이즈 확인
    if($uBoardImgSize > 10000000){
        echo "<script>alert('이미지 파일 용량이 1MB를 초과했습니다.')</script>";
    }

    $result = $connect -> query($sql);
    $result = move_uploaded_file($uBoardImgTmp, $uBoardImgDir.$uBoardImgName);

    Header("Location: board.php");
?>