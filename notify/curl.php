<?php
  //recieve POST data
  $token = $_POST['token'];
  $value1 = $_POST['value1'];
  $value2 = $_POST['value2'];
  $value3 = $_POST['value3'];

  //curl init
  $url = "https://notify-api.line.me/api/notify";
  $data = "message=ตัวแปร 1 = $value1\nตัวแปร 2 = $value2\nตัวแปร 3 = $value3";
  $author = "Authorization: Bearer $token";

  // curl send POST
  $ch = curl_init( $url );
  curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
  curl_setopt( $ch, CURLOPT_HTTPHEADER, array($author));
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
  $result = curl_exec($ch);
  curl_close($ch);

  echo "<h1>$result</h>";
 ?>
