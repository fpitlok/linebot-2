<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ทดสอบ Curl with PHP</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <style media="screen">
    .title-bar
    {
      background-color: #f3f3f3;
      padding-top: 15px;
      padding-bottom: 15px;
    }

  </style>
  <body>
    <div class="title-bar">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h1 class="title">
                <center><strong><h1>ทดสอบ Curl with PHP</h1></strong></center>
              </h1>
            </div>
          </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
      <div class="col-xs-1 col-sm-2 col-md-2 col-lg-3"></div>
      <div class="col-xs-10 col-sm-8 col-md-8 col-lg-6">
        <!-- form curl -->
        <form action="curl.php" method="post">

          <!-- token form -->
          <div class="form-group">
            <label for="token">Token :</label>
            <input type="text" class="form-control" name="token" id="token"><br>
          </div>
          <!-- token form -->

          <!-- value1 form -->
          <div class="form-group">
            <label for="value1">ข้อความ 1 :</label>
            <input type="text" class="form-control" name="value1" id="value1"><br>
          </div>
          <!-- value1 form -->

          <!-- value2 form -->
          <div class="form-group">
            <label for="value2">ข้อความ 2 :</label>
            <input type="text" class="form-control" name="value2" id="value2"><br>
          </div>
          <!-- value2 form -->

          <!-- value3 form -->
          <div class="form-group">
            <label for="value3">ข้อความ 3 :</label>
            <input type="text" class="form-control" name="value3" id="value3"><br>
          </div>
          <!-- value3 form -->

          <input type="submit" class="btn btn-success" name="submit" value="ส่งข้อความ">
        </form>
        <!-- form curl -->

      </div>
      <div class="col-xs-1 col-sm-2 col-md-2 col-lg-3"></div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
