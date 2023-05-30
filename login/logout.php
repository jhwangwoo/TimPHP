<?php 
  include "../connect/session.php";

  unset($_SESSION['memberID']);
  unset($_SESSION['userEmail']);
  unset($_SESSION['userName']);
  unset($_SESSION['userNickname']);
  Header("Location: ../main/main.php");
?>

<!-- <script>
</script> -->
