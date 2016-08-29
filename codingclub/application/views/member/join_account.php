      <div class="login-box-body">
        <p class="login-box-msg">CodingClub Membership Join</p>
          
        <div class="form-group has-feedback">
          <input type="email" id="account_id" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="passwd1" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="passwd2" class="form-control" placeholder="Password">
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
            "<?=HOSTURL?>/Member/rpcJoinAccount"
            ,{
               "account_id" : $('#account_id').val()
              ,"passwd1" : $('#passwd1').val()
              ,"passwd2" : $('#passwd2').val()
            }
            ,function(data, status){
              if(status == 'success' && data.code == 1)
              {
                window.location.replace("<?=HOSTURL?>/Login"); 
              }
              else if(data.code == 999)
              {
                alert('비밀번호를 다시 확인 부탁 드립니다');
              }
              else
              {
                alert('시스템오류입니다');
              }
            }
          );
        });
      });
    </script>
