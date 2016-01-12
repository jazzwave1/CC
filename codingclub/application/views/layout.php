<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sample Admin Tool</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="/static/AdminLTE-2.0.4/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <link href="/static/AdminLTE-2.0.4/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/AdminLTE-2.0.4/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/AdminLTE-2.0.4/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <link href="/static/AdminLTE-2.0.4/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="/static/AdminLTE-2.0.4/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="/static/AdminLTE-2.0.4/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="/static/AdminLTE-2.0.4/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link href="/static/AdminLTE-2.0.4/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/AdminLTE-2.0.4/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/static/AdminLTE-2.0.4/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />



  </head>
  <body class="skin-blue">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Sample Admin</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            </ul>
          </div>
        </nav>
      </header>
      <!--Left Menu-->
      <?=$menu?>
      <!--/.Left Menu-->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      
        <!--Main Title & Navi -->
        <?=$content_header?>

        <section class="content">
          <?=$main?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <!--footer-->
      <?=$footer?>
      <!--/.footer-->

      </div>
    </div>   







    <script src="/static/AdminLTE-2.0.4/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="/static/AdminLTE-2.0.4/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/static/AdminLTE-2.0.4/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/static/AdminLTE-2.0.4/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="/static/AdminLTE-2.0.4/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src='/static/AdminLTE-2.0.4/plugins/fastclick/fastclick.min.js'></script>
    <script src="/static/AdminLTE-2.0.4/dist/js/app.min.js" type="text/javascript"></script>
    <script src="/static/AdminLTE-2.0.4/dist/js/demo.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function () {
    $("#example1").dataTable();
    $('#example2').dataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": false,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false
    });
    });
    </script>
  </body>
</html>
