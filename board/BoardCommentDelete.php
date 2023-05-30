<?php
    include "../connect/connect.php";

    $uBoardCommentPass = $_POST['commentPass'];
    $uBoardCommentID = $_POST['uBoardCommentID'];

    $sql = "SELECT uBoardCommentPass FROM uBoardComment WHERE uBoardCommentPass = '$uBoardCommentPass' AND uBoardCommentID = '$uBoardCommentID'";
    $result = $connect -> query($sql);

    if($result -> num_rows == 0){
        $jsonResult = "bad";
    } else {
        $sql = "DELETE FROM uBoardComment WHERE uBoardCommentID = '$uBoardCommentID'";
        $connect -> query($sql);
        $jsonResult = "good";
    }

    echo json_encode(array("result" => $jsonResult));

?>