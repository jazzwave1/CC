<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CodingClub</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.2 -->
    <link href="/img/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/img/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/img/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/img/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
    <link href="/img/documentation/style.css" rel="stylesheet" type="text/css" /> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <!-- jQuery 2.1.3 -->
  <script src="/img/plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="/img/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="/img/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });

    });
  </script>

<body class="login-page">
  <br>
  <br>
  <section id='introduction'>
    <p class='lead'>
      <b>주니어클럽신청</b> 
      주니어스크래처, 주니머애니메이션메이커,게임메이커, 주니어앱메이커 
    </p>
  </section><!-- /#introduction -->

  <div class='row'>
    <div class='col-sm-4'>
      <div class='box box-primary'>
        <div class='box-header with-border'>
          <h3 class='box-title'>Ready</h3>
          <span class='label label-primary pull-right'><i class='fa fa-html5'></i></span>
        </div><!-- /.box-header -->
        <div class='box-body'>
          <p>Compiled and ready to use in production. Download this version
          if you don't want to customize AdminLTE's LESS files.</p>
          <a href='http://almsaeedstudio.com/download/AdminLTE-dist' class='btn btn-primary'><i class='fa fa-download'></i> Download</a>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->

    <div class='col-sm-4'>
      <div class='box box-primary'>
        <div class='box-header with-border'>
          <h3 class='box-title'>Ready</h3>
          <span class='label label-primary pull-right'><i class='fa fa-html5'></i></span>
        </div><!-- /.box-header -->
        <div class='box-body'>
          <p>Compiled and ready to use in production. Download this version
          if you don't want to customize AdminLTE's LESS files.</p>
          <a href='http://almsaeedstudio.com/download/AdminLTE-dist' class='btn btn-primary'><i class='fa fa-download'></i> Download</a>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
    <div class='col-sm-4'>
      <div class='box box-danger'>
        <div class='box-header with-border'>
          <h3 class='box-title'>Source Code</h3>
          <span class='label label-danger pull-right'><i class='fa fa-database'></i></span>
        </div><!-- /.box-header -->
        <div class='box-body'>
          <p>All files including the compiled CSS. Download this version
          if you plan on customizing the template. <b>Requires a LESS compiler.</b></p>
          <a href='http://almsaeedstudio.com/download/AdminLTE' class='btn btn-danger'><i class='fa fa-download'></i> Download</a>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->   
  

<script type="text/javascript">
$(function(){
  $('#bLogin').click(function(){
  
    $.post(
      "/Login/rpcCheckLogin"
      ,{
         "account_id" : $('#account_id').val()
        ,"passwd" : $('#passwd').val()
      }
      ,function(data, status){
        if(status == 'success' && data.code == 1)
        {
          window.location.replace("http://www.codingclub.com"); 
        }
        else
        {
          alert('아이디 / 비밀번호를 다시 확인 부탁 드립니다');
        }
      }
    );
    
  });
});
</script>
  

  </body>
</html>

