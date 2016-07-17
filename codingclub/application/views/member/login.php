      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
          
        <div class="form-group has-feedback">
          <input type="email" id="account_id" class="form-control" placeholder="ID">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="passwd" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <button id="bLogin" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div><!-- /.col -->
        </div>
      </div><!-- /.login-box-body -->

    <script>
      $(function(){
        $('#bLogin').click(function(){
        
          $.post(
            //"http://localhost/~leehojun/CC/codingclub/Login/rpcCheckLogin"
            "http://member.codingclubs.org/Login/rpcCheckLogin"
            ,{
               "account_id" : $('#account_id').val()
              ,"passwd" : $('#passwd').val()
            }
            ,function(data, status){
              if(status == 'success' && data.code == 1)
              {
                //window.location.replace("http://localhost/~leehojun/CC/codingclub/Member/mypage"); 
                window.location.replace("http://member.codingclubs.org/Member/mypage"); 
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
