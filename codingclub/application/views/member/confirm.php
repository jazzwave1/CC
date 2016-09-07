    <div class="login-box">
      <div class="login-logo"><b>CodingClub</b> Sign up
      </div><!-- /.login-logo -->
     
      <div class="login-box-body">
        <p class="login-box-msg f18"><?=$sResult?></p>
          
        <div class="btn_area">
          <div class="w50">
            <button id="bLogin" class="btn btn-primary btn-block btn-flat">로그인</button>
          </div>
        </div>
      </div>
    </div><!-- /.login-box-body -->

    <script>
      $(function(){
        $('#bLogin').click(function(){
          window.location.replace("<?=HOSTURL?>/Login"); 
        }); 
      });  
    </script>
