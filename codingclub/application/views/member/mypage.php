<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CodingClub | MyPage</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/img/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="/img/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="/img/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/img/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">

<script src="/img/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="/img/bootstrap/js/bootstrap.min.js"></script>
<script src="/img/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/img/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/img/plugins/fastclick/fastclick.js"></script>
<script src="/img/dist/js/app.min.js"></script>
<script src="/img/dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
