<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title>เข้าสู่ระบบสำหรับนักศึกษา</title>
  <style>
    body { margin: 0; padding: 20px }
    input { width: 90%; height: 32px; display: block; margin: 0 auto }
    input[type=text], input[type=password] { padding: 16px; font-size: 24px }
    input[type=button] { width: 100%; height: 48px }

    .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <table width="100%" cellspacing="8">
    <tr><td><input type="text" id="std_id" class='form-control' placeholder="รหัสนักศึกษา" required><br></td></tr>
    <tr><td><input type="text" id="id_card" class='form-control' placeholder="รหัสประชาชน 13 หลัก" required><br></td></tr>
    <tr><td><input type="button" value="เข้าสู่ระบบ" id="post" class='button' onclick='auth()'></td></tr>
    <input type="hidden" id="uid">
    <input type="hidden" id="name">
  </table>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"> </script>
  <script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
  <script>
    window.onload = function (e) {
      liff.init(function (data) { 
        liff.getProfile()
        .then(profile => {
          const name = profile.displayName

          initializeApp(data, name); 

        })
      });
    }
    function initializeApp(data, name) {
      $('#uid').val(data.context.userId);
      $('#name').val(name);
      
    }

    function auth() {
      var std_id = $('#std_id').val();
      var id_card = $('#id_card').val();
      var uid = $('#uid').val();
      var name = $('#name').val();

      $.post( "query/auth.php", { std_id: std_id, id_card: id_card, uid: uid, name: name })
      .done(function( data ) {
        swal(data).then(function () {
          liff.closeWindow();
        });
      });

    }
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>