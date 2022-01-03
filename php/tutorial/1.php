<!doctype html>

<html lang="kr">
<head>
  <meta charset="utf-8">

</head>

<body>
  <h1> php </h1>
  <?php
    for($i=0;$i<=10;$i++)
    {
      echo "$i.에서 10까지 출력<br>";
    }

    while($i<19) {
      echo "number .$i.";
      $i++;
    }

    $var = "참외";
    switch ($var) {

      case "귤" :
        echo "주황색";
        break;

      case "딸기" :
        echo "빨간색";
        break;

      case "참외" :
        echo "노란색<br>";
        break;

    }

    $list = array("one","two","three");
      echo $list[2];
      echo count($list)."<br>";

      for($i=0;$i<3;$i++){
        echo $list[$i]."<br>";
      }

      $list = array("최진혁", "최유빈", "한이람", "한이은");
      $i = 0;
      while($i < count($list)){
        echo "<li>".$list[$i]."</li>";
        $i = $i + 1;

  ?>
  <h1>JavaScript </h1>
  <script>
    document.write("Hello World");
    document.write(10+10);
  </script>
</body>

</html>
