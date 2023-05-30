<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $uBoardID = $_GET['uBoardID'];
    $uBoardID = $connect -> real_escape_string($uBoardID);
    $sql = "DELETE FROM uBoard WHERE uBoardID = {$uBoardID}";
    $connect -> query($sql);
?>
<script>
    location.href = "mypageBoard.php";
</script>