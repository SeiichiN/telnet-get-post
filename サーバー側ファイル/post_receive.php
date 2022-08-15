<?php
$name = $_POST['name'];
if ($name === null || $name === '') {
  $name = 'Sky Walker';
}
?>
<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>post_receive</title>
  </head>
  <body>
    <h1>post receive</h1>
    <p>name is <?php echo $name; ?></p>
    <script>
    'use strict';

    </script>
  </body>
</html>

<!-- 修正時刻: Mon 2022/08/15 13:25:35 -->
