<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $userName = $_POST['userNameMy'];
    $userEmail = $_POST['userEmailMy'];
    $userNickname = $_POST['userNicknameMy'];
    $userPhone = $_POST['userPhoneMy'];

    $userName = $connect -> real_escape_string($userName);
    $userEmail = $connect -> real_escape_string($userEmail);
    $userNickname = $connect -> real_escape_string($userNickname);
    $userPhone = $connect -> real_escape_string($userPhone);
    $memberID = $_SESSION['memberID'];

    $userImgSrc = $_FILES['userImgSrc'];
    $userImgSize = $_FILES['userImgSrc']['size'];
    $userImgType = $_FILES['userImgSrc']['type'];
    $userImgName = $_FILES['userImgSrc']['name'];
    $userImgTmp = $_FILES['userImgSrc']['tmp_name'];

    // echo "<pre>";
    // var_dump($userImgSrc);
    // echo "</pre>";

    $sql = "SELECT * FROM userMembers WHERE memberID = {$memberID}";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        if($info['memberID'] == $memberID){
        
            // 이미지 파일명 확인
            if($userImgType){
                $fileTypeExtension = explode("/", $userImgType);
                $fileType = $fileTypeExtension[0]; // image
                $fileExtension = $fileTypeExtension[1]; // jpeg

                // 이미지 타입 확인
                if($fileType == "image"){
                    if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                        $userImgDir = "../assets/profile/";
                        $userImgName = "img_".time().rand(1, 99999)."."."{$fileExtension}";

                        // 이미지 사이즈 확인
                        if($userImgSize > 10000000){
                            echo "<script>alert('이미지 파일 용량이 1MB를 초과했습니다.')</script>";
                            exit();
                        }

                        // 기존 이미지 삭제
                        $oldImagePath = $userImgDir.$info['userImgSrc'];
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }

                        echo "<script>alert('완료되었습니다.')</script>";
                        $sql = "UPDATE userMembers SET userName = '{$userName}', userEmail = '{$userEmail}',  userNickname = '{$userNickname}', userPhone = '{$userPhone}', userImgSrc = '{$userImgName}', userImgSize = '{$userImgSize}' WHERE memberID = '{$memberID}'";
                        $result = $connect -> query($sql);
                        $result = move_uploaded_file($userImgTmp, $userImgDir.$userImgName);
                        echo "<script>location.href='mypage.php'</script>";
                    } else {
                        echo "<script>alert('이미지 파일이 아닙니다.')</script>";
                        exit();
                        echo "<script>location.href='mypage.php'</script>";
                    }
                } else {
                    echo "<script>alert('이미지 파일이 아닙니다.')</script>";
                    exit();
                    echo "<script>location.href='mypageModify.php'</script>";
                }
            } else {
                echo "<script>alert('완료되었습니다.')</script>";
                $sql = "UPDATE userMembers SET userName = '{$userName}', userEmail = '{$userEmail}',  userNickname = '{$userNickname}', userPhone = '{$userPhone}' WHERE memberID = '{$memberID}'";
                $result = $connect -> query($sql);
                echo "<script>location.href='mypage.php'</script>";
            }
        } else {
            echo "<script>alert('형식에 맞지 않습니다. 다시 한번 확인해주세요!')</script>";
            exit();
            echo "<script>location.href='mypageModify.php'</script>";
        }
    } else {
        echo "<script>alert('관리자 에러!!')</script>";
        exit();
        echo "<script>location.href='mypage.php'</script>";
    }

    
?>  