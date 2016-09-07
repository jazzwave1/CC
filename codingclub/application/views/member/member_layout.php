<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Codinglcub</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?=HOSTURL?>/img/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=HOSTURL?>/img/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=HOSTURL?>/img/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <!-- jQuery 2.1.4 -->
    <script src="<?=HOSTURL?>/img/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?=HOSTURL?>/img/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?=HOSTURL?>/img/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>

    <!-- 커스텀 스타일 -->
    <link rel="stylesheet" href="<?=HOSTURL?>/static/css/reset.css">
    <link rel="stylesheet" href="<?=HOSTURL?>/static/css/common.css">
    <link rel="stylesheet" href="<?=HOSTURL?>/static/css/member.css">
 
  <body class="hold-transition login-page basic_pg">
    <nav class="navbar  navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./"><strong>CodingClub</strong>Membership</a>
        </div>
        <!--div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
            <li><a href="jusocl.html">주니어소프트웨어클럽</a></li>
            <li><a href="main.html">코딩클럽</a></li>
            <li class="sign_in"><a href="signup.html">회원가입</a></li>
            <li class="my_page" style="display:none"><a href="mypage.html">마이페이지</a></li>
            <li class="sign_up"><a href="login.html">로그인</a></li>
            <li class="sign_out" style="display:none"><a href="main.html">로그아웃</a></li>
          </ul>
        </div--><!--/.nav-collapse -->
      </div>
    </nav>

      <?=$contents?>


  </body>
</html>
