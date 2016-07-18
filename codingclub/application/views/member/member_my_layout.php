<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Codinglcub</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="http://member.codingclubs.org/img/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://member.codingclubs.org/img/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="http://member.codingclubs.org/img/dist/css/skins/_all-skins.min.css">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
          html, body {
              min-height: 100%;
              padding: 0;
              margin: 0;
              font-family: 'Source Sans Pro', "Helvetica Neue", Helvetica, Arial, sans-serif;
          }
          iframe {
              display: block;
              overflow: auto;
              border: 0;
              margin: 0;
              padding: 0;
              margin: 0 auto;
          }
          .frame {
              height: 49px;
              margin: 0;
              padding: 0;
              border-bottom: 1px solid #ddd;
          }
          .frame a {
              color: #666;
          }
          .frame a:hover {
              color: #222;
          }
          .frame .buttons a {
              height: 49px;
              line-height: 49px;
              display: inline-block;
              text-align: center;
              width: 50px;
              border-left: 1px solid #ddd;
          }
          .frame .brand {
              color: #444;
              font-size: 20px;
              line-height: 49px;
              display: inline-block;
              padding-left: 10px;
          }
          .frame .brand small {
              font-size: 14px;
          }
          a,a:hover {
              text-decoration: none;
          }
          .container-fluid {
              padding: 0;
              margin: 0;
          }
          .text-muted {
              color: #999;
          }
          .ad {
              text-align: center;
              position: fixed;
              bottom: 0;
              left: 0;
              background: #222;
              background: rgba(0,0,0,0.8);
              width: 100%;
              color: #fff;
              display: none;
          }
          #close-ad {
              float: left;
              margin-left: 10px;
              margin-top: 10px;
              cursor: pointer;
          }

      .color-palette {
        height: 35px;
        line-height: 35px;
        text-align: center;
      }

      .color-palette-set {
        margin-bottom: 15px;
      }

      .color-palette span {
        display: none;
        font-size: 12px;
      }

      .color-palette:hover span {
        display: block;
      }

      .color-palette-box h4 {
        position: absolute;
        top: 100%;
        left: 25px;
        margin-top: -40px;
        color: rgba(255, 255, 255, 0.8);
        font-size: 12px;
        display: block;
        z-index: 7;
      }
    </style>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- jQuery 2.2.0 -->
  <script src="http://member.codingclubs.org/img/plugins/jQuery/jQuery-2.2.0.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="http://member.codingclubs.org/img/bootstrap/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="http://member.codingclubs.org/img/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="http://member.codingclubs.org/img/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="http://member.codingclubs.org/img/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="http://member.codingclubs.org/img/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="http://member.codingclubs.org/img/dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="http://member.codingclubs.org/img/dist/js/demo.js"></script>
  <!-- page script -->
  <script>
  

  </script>

 
<body class="hold-transition skin-blue sidebar-mini">
  <header>
    <nav class="frame" role="navigation">
        <div class="container-fluid">
            <a href="http://codingclubs.org" class="brand">
                Codinbclub 
                <small class="text-muted hidden-xs">My Page</small>
            </a>
            <!--div class="buttons pull-right">
                <a class="first hidden-xs" id="display-full" href="#" data-toggle="tooltip" data-placement="bottom" title="Display Desktop - full width"><i class="fa fa-desktop fa-lg"></i></a>
                <a class="hidden-xs" id="display-940" href="#" data-toggle="tooltip" data-placement="bottom" title="Display Tablet - 940px"><i class="fa fa-tablet fa-lg"></i></a>
                <a class="hidden-xs" id="display-480" href="#" data-toggle="tooltip" data-placement="bottom" title="Display Phone - 480px"><i class="fa fa-mobile fa-lg"></i></a>
                <a href="https://almsaeedstudio.com/premium" data-toggle="tooltip" data-placement="bottom" title="Premium Templates"><i  style="color: #F34D59" class="fa fa-tint fa-lg"></i></a>
                <a href="https://almsaeedstudio.com/download/AdminLTE-master" data-toggle="tooltip" data-placement="bottom" title="Download now"><i class="fa fa-download fa-lg"></i></a>
                <a id="remove-frame" href="#" data-toggle="tooltip" data-placement="bottom" title="Remove frame"><i class="fa fa-times"></i></a>
            </div-->
        </div><!-- /.container -->
    </nav><!--/.navbar-->
  </header>
  
  <br>

      <?=$contents?>
  
  </body>
</html>
