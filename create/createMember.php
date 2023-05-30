<?php
    include "../connect/connect.php";

    $sql = "create table userMembers(";
    $sql .= "memberID int(10) unsigned auto_increment,";
    $sql .= "userEmail varchar(40) NOT NULL,";
    $sql .= "userName varchar(40) NOT NULL,";
    $sql .= "userNickname varchar(40) NOT NULL,";
    $sql .= "userPass varchar(40) NOT NULL,";
    $sql .= "userSite varchar(40) DEFAULT NULL,";
    $sql .= "userIntro varchar(40) DEFAULT NULL,";
    $sql .= "userPhone varchar(40) DEFAULT NULL,";
    $sql .= "userImgSrc varchar(40) DEFAULT NULL,";
    $sql .= "userImgSize varchar(40) DEFAULT NULL,";
    $sql .= "userGender varchar(5) DEFAULT NULL,";
    $sql .= "userDelete int(10) DEFAULT 1,";
    $sql .= "userRegtime int(40) NOT NULL,";
    $sql .= "userModTime int(40) DEFAULT NULL,";
    $sql .= "PRIMARY KEY(memberID)";
    $sql .= ") charset=utf8";
    
    $result = $connect -> query($sql);

    if($result){
        echo "create tables complete";
    } else {
        echo "create tables false";
    }
?>