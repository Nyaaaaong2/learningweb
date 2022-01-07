<?php

  require('_conn.php');
  $no=$_SESSION['no'];

  //DB에 남기고 삭제
  //$sql = "UPDATE `user` SET `del_flg` =1 WHERE `no`=$no";

  //$sql = "UPDATE `user` SET `del_flg` =1 WHERE `no`=\"$_SESSION['no']\"";

  //완전 삭제하는 문장
  $sql = "DELETE FROM user WHERE no={$_SESSION['no']}";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    require('_logout.php');
    echo "<script>alert('회원탈퇴가 완료 되었습니다. 다음에 또 봐요~');locaton.href='index.php'</script>";
  }

?>
