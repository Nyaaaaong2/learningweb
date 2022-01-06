<?php

  require('_conn.php');
  $id = $_POST['id'];
  $pw = $_POST['pw'];

  //select 조회, isert 삽입, dele
  $sql = "SELECT *  FROM `user` WHERE id = '$id' AND pw = '$pw'";
  $result = mysqli_query($conn, $sql);
  $row = $result->num_rows; // 결과값을 정수로 변환
  if($row > 0) {
    //로그인 처리
    require('_loginok.php');
    echo "<script>window.alert('로그인 완료!');location.href='index.php'</script>";
    }
  else {
    echo "<script>window.alert('로그인 실패! 아이디나 비밀번호를 확인하여 주세요!');location.href='login.php'</script>";
  }
?>
