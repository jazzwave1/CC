    <div class="login-box">
      <div class="login-logo"><b>CodingClub</b> Sign up
      </div><!-- /.login-logo -->
     
      <div class="login-box-body">
        <p class="login-box-msg">Sign up</p>
          
        <div class="form-group has-feedback">
          <input type="email" id="account_id" class="form-control" placeholder="이메일 아이디">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="validation" style="display:block">
          <button id="bIdCheck" type="button" class="btn btn-default btn-xs">중복확인</button> 
          <span id="sIdCheckT"class="confirm" style="">*사용 가능한 아이디 입니다.</span>
          <span id="sIdCheckF"class="danger"  style="">*사용할 수 없는 아이디 입니다.</span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="passwd1" class="form-control" placeholder="비밀번호">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="passwd2" class="form-control" placeholder="비밀번호 확인">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="validation">
          <span class="danger">*비밀번호가 일치하지 않습니다.</span>
        </div>
        <div class="login_util">
          <div class="remem_id"><input name="agree" id="agree" type="checkbox"><label>이용약관 및 개인정보처리방침 동의</label></div>
          <div class="reset_pw"><a href="http://member.codingclubs.org/Member/privacy">약관보기</a></div>
        </div>
        <div class="btn_area">
            <label>클릭 후 잠시만 기다려 주세요<br>본인확인 이메일 발송에 1~2초 필요합니다</label>
          <div class="w50">
            <button id="bJoin" class="btn btn-primary btn-block btn-flat">회원가입</button>
          </div>
          <div class="w50">
            <button id="bLogin" class="btn btn-primary-line">로그인</button>
          </div><!-- /.col -->
        </div>
      </div><!-- /.login-box-body -->

			<input type='hidden' name='idCheck' id='idCheck' value=''>
    
    <script>
      function emailcheck(strValue)
      {
        var regExp = /[0-9a-zA-Z][_0-9a-zA-Z-]*@[_0-9a-zA-Z-]+(\.[_0-9a-zA-Z-]+){1,2}$/;
        if(strValue.lenght == 0) return false;
        if (!strValue.match(regExp)) return false;
        
        return true;
      }
      $(function(){
        $('#bLogin').click(function(){
          window.location.replace("<?=HOSTURL?>/Login?burl=<?=$sBackURL?>"); 
        }); 
        $('#bJoin').click(function(){
          
          if($("input:checkbox[id='agree']").is(":checked") == false)
          {
            alert('이용약관 및 개인정보처리방침에 동의해 주세요 ');
            $('#agree').focus();
            return;
          }         
          if($.trim($('#account_id').val()) == '')
          {
            alert('ID를 입력해 주세요');
            $('#account_id').focus();
            return;
          }         
          if( emailcheck($.trim($('#account_id').val())) == false)
          {
            alert('사용가능한 이메일 형식의 아이디를 넣어 주세요');
            $('#account_id').focus();
            return;
          }
          if($.trim($('#idCheck').val()) != 1)
          {
            alert('아이디 중복확인 부탁 드립니다');
            $('#account_id').focus();
            return;
          } 
          if($.trim($('#passwd1').val()) == '' || $.trim($('#passwd2').val()) == '' )
          {
            alert('패스워드를 입력해 주세요');
            $('#passwd1').focus();
            return;
          }
          if($.trim($('#passwd1').val()) != $.trim($('#passwd2').val()))
          {
            alert('입력한 패스워드가 틀립니다.');
            $('#passwd1').focus();
            return;
          }

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
                alert('회원가입 감사합니다\n본인확인메일이 발송 되었습니다.\n본인확인 후 로그인 부탁 드립니다');
                window.location.replace("<?=HOSTURL?>/Login?burl=<?=$sBackURL?>"); 
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
      
        $('#bIdCheck').click(function(){
        if($.trim($('#account_id').val()) == '')
        {
          alert('ID를 입력해 주세요');
          $('#account_id').focus();
          return;
        }     
        $.post(
          "<?=HOSTURL?>/Member/rpcIdCheck"
          ,{
             "account_id" : $('#account_id').val()
            ,"idCheck" : $('#idCheck').val()
          }
          ,function(data, status){
            if(status == 'success' && data.code == 1)
            {
              $('#sIdCheckT').attr("style", "display:block"); 
              $('#sIdCheckF').attr("style", ""); 
              $('#idCheck').val('1');
            }
            else if(data.code == 999)
            {
              $('#sIdCheckT').attr("style", ""); 
              $('#sIdCheckF').attr("style", "display:block"); 
              $('#idCheck').val('0');

              return ;
            }
            else
            {
              alert('시스템오류입니다');
              return;
            }
          }
        );
      });

    });
    </script>
