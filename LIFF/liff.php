<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title></title>
</head>
<body>
  
    <input type="hidden" id="uid">
    <input type="hidden" id="name">
  
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
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
