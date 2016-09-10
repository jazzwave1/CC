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
          <a class="navbar-brand" href="http://codingclubs.org"><strong>CodingClub</strong>Membership</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
            <!--li><a href="jusocl.html">주니어소프트웨어클럽</a></li-->
            <li><a href="http://codingclubs.org">코딩클럽</a></li>
            <!--li class="sign_in"><a href="signup.html">회원가입</a></li>
            <li class="my_page" style="display:none"><a href="mypage.html">마이페이지</a></li>
            <li class="sign_up"><a href="login.html">로그인</a></li>
            <li class="sign_out" style="display:none"><a href="main.html">로그아웃</a></li-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="login-box">
      <div class="login-logo"><b>CodingClub</b> Login
      </div><!-- /.login-logo -->
     
            <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
          
        <div class="form-group has-feedback">
          <input type="email" name="account_id" id="account_id" class="form-control" placeholder="이메일 아이디">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="passwd" class="form-control" placeholder="비밀번호">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="login_util">
          <div class="remem_id"><input type="checkbox" id="idSaveCheck" <?=$isIdSave?> ><label>기억하기</label></div>
          <div id='bReSet' class="reset_pw"><a href="#">비밀번호 재설정</a></div>
        </div>
        <div class="btn_area">
          <div class="w50">
            <button id="bLogin" class="btn btn-primary btn-block btn-flat">로그인</button>
          </div>
          <div class="w50">
            <button id="bJoin" class="btn btn-primary-line">회원가입</button>
          </div><!-- /.col -->
        </div>
      </div><!-- /.login-box-body -->

    <script>
      function setIdsave()
      {
        if($("#idSaveCheck").is(":checked")){ 
            var userInputId = $("input[name='account_id']").val();
            setCookie("userInputId", userInputId, 7); 
        }else{ 
            deleteCookie("userInputId");
        }
      }
      $(document).ready(function(){
          var userInputId = getCookie("userInputId");
          $("input[name='account_id']").val(userInputId); 
           
          $("input[name='account_id']").keyup(function(){ 
              if($("#idSaveCheck").is(":checked")){ 
                  var userInputId = $("input[name='account_id']").val();
                  setCookie("userInputId", userInputId, 7); 
              }
          });
          
          $('#bReSet').click(function(){
            alert('준비중에 있습니다. \njazzwave14@gmail.com 으로 메일 요청 부탁 드립니다'); 
          });
          $('#bJoin').click(function(){
            window.location.replace("<?=HOSTURL?>/member/memberJoinAccount?burl=<?=$sBackURL?>"); 
          }); 
          $('#bLogin').click(function(){
            
            setIdsave();  
            
            $.post(
              "<?=HOSTURL?>/Login/rpcCheckLogin"
              ,{
                 "account_id" : $('#account_id').val()
                ,"passwd" : $('#passwd').val()
              }
              ,function(data, status){
                if(status == 'success' && data.code == 1)
                {
                  if(<?=$sBackURL?>) 
                    window.location.replace("<?=HOSTURL?>/<?=$sBackURL?>"); 
                  else
                    window.location.replace("http://codingclubs.org"); 
                }
                else if(status == 'success' && data.code == 998)
                {
                  alert('회원가입시 발송된 이메일의 본인인증 링크를 클릭 부탁 드립니다.\n본인확인후 로그인이 가능합니다.');
                }
                else
                {
                  alert('아이디 / 비밀번호를 다시 확인 부탁 드립니다');
                }
              }
            );
          });
          
      });
       
      function setCookie(cookieName, value, exdays){
          var exdate = new Date();
          exdate.setDate(exdate.getDate() + exdays);
          var cookieValue = escape(value) + ((exdays==null) ? "" : "; expires=" + exdate.toGMTString());
          document.cookie = cookieName + "=" + cookieValue;
      }
       
      function deleteCookie(cookieName){
          var expireDate = new Date();
          expireDate.setDate(expireDate.getDate() - 1);
          document.cookie = cookieName + "= " + "; expires=" + expireDate.toGMTString();
      }
       
      function getCookie(cookieName) {
          cookieName = cookieName + '=';
          var cookieData = document.cookie;
          var start = cookieData.indexOf(cookieName);
          var cookieValue = '';
          if(start != -1){
              start += cookieName.length;
              var end = cookieData.indexOf(';', start);
              if(end == -1)end = cookieData.length;
              cookieValue = cookieData.substring(start, end);
          }
          return unescape(cookieValue);
      }
    </script>

    </div><!-- /.login-box -->
    <!-- value test code setting-->

  </body>
</html>
