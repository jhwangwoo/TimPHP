<?php
    include "../connect/connect.php";

    for($i=1; $i<300; $i++){
        $regTime = time();

        $sql = "INSERT INTO uBoard(memberID, uBoardTitle, uBoardContents, uBoardCategory, uBoardAuthor, uBoardView, uBoardLike, uBoardDelete, uBoardRegTime) VALUES(1, '게시판 타이틀${i}입니다.', '게시판 내용${i}입니다.게시판 내용입니다.게시판 내용입니다.게시판 내용입니다.', '1', '1', '1', '1', '0', '$regTime')";
        
        $result = $connect -> query($sql);

    if($result){
        echo "create tables complete";
    } else {
        echo "create tables false";
    }
}
?>