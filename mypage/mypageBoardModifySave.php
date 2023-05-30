<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $uBoardID = $_POST['uBoardID'];
    $uBoardTitle = $_POST['uBoardTitle'];
    $uBoardContents = $_POST['uBoardContents'];
    $uBoardPass = $_POST['uBoardPass'];

    $uBoardTitle = $connect -> real_escape_string($uBoardTitle);
    $uBoardContents = $connect -> real_escape_string($uBoardContents);
    $uBoardPass = $connect -> real_escape_string($uBoardPass);
    $memberID = $_SESSION['memberID'];

    $sql = "SELECT * FROM userMembers WHERE memberID = {$memberID}";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        if($info['memberID'] == $memberID && $info['userPass'] == $uBoardPass){
            $sql = "UPDATE uBoard SET uBoardTitle = '{$uBoardTitle}', uBoardContents = '{$uBoardContents}' WHERE uBoardID = '{$uBoardID}'";
            $connect -> query($sql);
        } else {
            echo "<script>alert('비밀번호가 틀렸습니다. 다시 한번 확인해주세요!')</script>";
        }
    } else {
        echo "<script>alert('관리자 에러!!')</script>";
    }    
?>  

<script>
    location.href = "mypageBoard.php";
</script>