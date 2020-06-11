<?php
      
  if (isset($_POST['number1']) && isset($_POST['number2']) ){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
  }
  $answer = $number1 + $number2;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8"/>
  <title>足し算しかできない計算機</title>
  <style>
    .box {
      padding: 0.5em 1em;
      margin: 2em 0;
      font-weight: bold;
      background: #FFF;
      border: solid 3px #6091d3;/*線*/
      border-radius: 10px;/*角の丸み*/
      text-align: center;
      max-width: 600px;
    }
    .box h2 {
      background: #dfefff;
      box-shadow: 0px 0px 0px 5px #dfefff;
      border: dashed 2px white;
      padding: 0.2em 0.5em;
    }
    .main_point {
      background: #CEF9DC;
      padding: 10px;
      margin: 5px;
    }
  </style>
</head>
<body>

  <div class="box">
    <h2>計算機（足し算のみ）</h2>

    <p>下の枠に数字を入れてみてね！</p>

    <form action="calculator.php" method="post">
      <div class="main_point">
        <input type="text" name="number1" value="<?php echo htmlspecialchars($number1); ?>"> +
        <input type="text" name="number2" value="<?php echo htmlspecialchars($number2); ?>"> =
        <?php print $answer; ?>
      </div>
      <input type="submit" name="button_sum" value="計算する！">
    </form>
  </div>
  

</body>
</html>