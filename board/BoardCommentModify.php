<?php
    include "../connect/connect.php";
    $commentMsg = $_POST['commentMsg'];
    $uBoardCommentPass = $_POST['commentPass'];
    $uBoardCommentID = $_POST['uBoardCommentID'];

    $sql = "SELECT uBoardCommentPass FROM uBoardComment WHERE uBoardCommentPass = '$uBoardCommentPass' AND uBoardCommentID = '$uBoardCommentID'";
    $result = $connect -> query($sql);
    
    if($result -> num_rows == 0){
        $jsonResult = "bad";
    } else {
        $sql = "UPDATE uBoardComment SET uBoardCommentMsg = '$commentMsg' WHERE uBoardCommentID = '$uBoardCommentID'";
        $connect -> query($sql);
        $jsonResult = "good";
    }
    echo json_encode(array("result" => $jsonResult));
?>