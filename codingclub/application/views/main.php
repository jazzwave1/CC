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
    <!-- Theme style -->
    <link href="/img/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/img/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

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

  <body class="main-header">
  <section class="content">
  <div class="wrapper"> 
    <div class="col-md-6 col-xs-offset-3">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">CodingClub</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://placehold.it/900x500/39CCCC/ffffff&text=CodingClub" alt="First slide">
              <div class="carousel-caption">
                재미있는 컴퓨팅, 신나는 메이킹<br> 즐거운 소프트웨어!<br>누구나 코딩을 배우고 테크놀로지로 메이커가 될 수 있다. 
              </div>
            </div>
            <div class="item">
              <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Coding" alt="Second slide">
              <div class="carousel-caption">
                주니어 소프트 클럽
              </div>
            </div>
            <div class="item">
              <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Coding" alt="Third slide">
              <div class="carousel-caption">
                모두의 클럽
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="fa fa-angle-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="fa fa-angle-right"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
  </section>

  
  
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

