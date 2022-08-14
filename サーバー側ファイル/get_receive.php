<?php
$name = $_GET['name'];
if ($name === null || $name === '') {
  $name = '名無しの権兵衛';
}
?>
<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>get_receive</title>
  </head>
  <body>
    <h1>getを取得</h1>
    <p>name は <?php echo $name; ?></p>
    <script>
    'use strict';

    </script>
  </body>
</html>

<!-- 修正時刻: Sun 2022/08/14 22:48:50 -->
