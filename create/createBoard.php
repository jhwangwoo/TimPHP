<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE uBoard (";
    $sql .= "uBoardID int(10) unsigned auto_increment,";
    $sql .= "memberID int(10) unsigned NOT NULL,";
    $sql .= "uBoardTitle varchar(255) NOT NULL,";
    $sql .= "uBoardContents longtext NOT NULL,";
    $sql .= "uBoardCategory varchar(20) NOT NULL,";
    $sql .= "uBoardAuthor varchar(20) NOT NULL,";
    $sql .= "uBoardView int(10) NOT NULL,";
    $sql .= "uBoardLike int(10) NOT NULL,";
    $sql .= "uBoardImgFile varchar(100) DEFAULT NULL,";
    $sql .= "uBoardImgSize varchar(100) DEFAULT NULL,";
    $sql .= "uBoardDelete int(10) NOT NULL,";
    $sql .= "uBoardRegTime int(10) NOT NULL,";
    $sql .= "uBoardModTime int(10) DEFAULT NULL,";
    $sql .= "PRIMARY KEY (uBoardID)";
    $sql .= ") charset=utf8";
    
    $result = $connect -> query($sql);

    if($result){
        echo "create tables complete";
    } else {
        // echo "create tables false";
    }
?>