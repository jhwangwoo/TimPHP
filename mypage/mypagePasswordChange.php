<?php
  include "../connect/connect.php";
  include "../connect/session.php";
  include "../connect/sessionCheck.php";

  $userName = $_SESSION['userName'];
  $userPassword = $_POST['userPassword'];
  $newPassword = $_POST['newPassword'];
  $newPasswordConfirm = $_POST['newPasswordConfirm'];

  if (!is_null($userPassword)) {
    $sql = "SELECT userPass FROM userMembers WHERE userName = '" . $userName . "'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
      $info = $result->fetch_array(MYSQLI_ASSOC);
      $youPass = $info['userPass'];

      if ($userPassword == $youPass) {
        if ($newPassword == $newPasswordConfirm) {
          $sqlPass = "UPDATE userMembers SET userPass = '" . $newPassword . "' WHERE userName = '" . $userName . "'";
          $result = $connect->query($sqlPass);
          Header("Location: ../mypage/mypage.php");
        } else {
          echo "<script>alert('새 비밀번호를 다시 확인해주세요.'); history.back(1)</script>";
          exit;
        }
      } 
      else {
        echo "<script>alert('입력하신 비밀번호가 다릅니다.'); history.back(1)</script>";
        exit;
      }
    } 
    else {
      echo "<script>alert('해당하는 사용자를 찾을 수 없습니다.'); history.back(1)</script>";
      exit;
    }
  }
?>