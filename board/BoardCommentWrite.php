<?php
    include "../connect/connect.php";
    $uBoardID = $_POST['uBoardID'];
    $memberID = $_POST['memberID'];
    $commentName = $_POST['name'];
    $commentPass = $_POST['pass'];
    $commentWrite = $_POST['msg'];
    $regTime = time();
    $sql = "INSERT INTO uBoardComment(memberID, uBoardID, uBoardCommentName, uBoardCommentPass, uBoardCommentMsg, uBoardCommentDelete, regTime) VALUES('$memberID', '$uBoardID', '$commentName', '$commentPass', '$commentWrite', '0', '$regTime')";
    $result = $connect -> query($sql);
    echo json_encode(array("info" => $uBoardID));
?>