<?php
    include "../connect/connect.php";
    
    $sql = "CREATE TABLE uBoardComment (";
    $sql .= "uBoardCommentID int(10) unsigned auto_increment,";
    $sql .= "memberID int(10) unsigned,";
    $sql .= "uBoardID int(10) unsigned,";
    $sql .= "uBoardCommentName varchar(20) NOT NULL,";
    $sql .= "uBoardCommentPass varchar(20) NOT NULL,";
    $sql .= "uBoardCommentMsg varchar(255) NOT NULL,";
    $sql .= "uBoardCommentDelete int(0) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (uBoardCommentID)";
    $sql .= ") charset=utf8";
    $connect -> query($sql);
?>