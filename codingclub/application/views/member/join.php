

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CodingClub | Join</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="/img/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/img/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Member Join</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">User ID</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter ...">
            </div>
            <!-- select -->
            <div class="form-group">
              <label>Type</label>
              <select id="type" class="form-control">
                <option value="STD">학생</option>
                <option value="TEA">선생님</option>
                <option value="NOR">일반</option>
              </select>
            </div> 
            <!--div class="form-group">
            <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile">
              <p class="help-block">Example block-level help text here.</p>
            </div-->
            
          </div><!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div><!-- /.center -->

    <!-- jQuery 2.1.3 -->
    <script src="/img/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/img/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
