      <div class="login-box-body">
        <p class="login-box-msg">기본정보입력</p>
          
          <div class="form-group has-feedback">
            <input type="text" id="user_name" class="form-control" placeholder="참여학생이름">
          </div>
          <div class="form-group has-feedback">
            <input type="text" id="hp" class="form-control" placeholder="핸드폰번호( '-' 빼고 입력 )">
          </div>
          <div class="form-group has-feedback">
            <input type="text" id="school" class="form-control" placeholder="참여학생학교">
          </div>
          <div class="form-group has-feedback">
            <div class="form-group">
              <select id="grde" class="form-control">
                <option value='0'>참여학생학년</option>
                <option value='초등1'> 초등1</option>
                <option value='초등2'> 초등2</option>
                <option value='초등3'> 초등3</option>
                <option value='초등4'> 초등4</option>
                <option value='초등5'> 초등5</option>
                <option value='초등6'> 초등6</option>
                <option value='중등1'> 중등1</option>
                <option value='중등2'> 중등2</option>
                <option value='중등3'> 중등3</option>
                <option value='고등1'> 고등1</option>
                <option value='고등2'> 고등2</option>
                <option value='고등3'> 고등3</option>
              </select>
            </div>  
          </div>
          <div class="form-group has-feedback">
            <input type="txt" id="addrcode" class="form-control" placeholder="거주지(서울시 송파구 방이동)">
          </div>


          <div class="row">
            <div class="col-xs-4">
              <button id="bLogin" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
          <input type='hidden' id='usn' value='<?=$usn?>'>
      </div><!-- /.login-box-body -->
    <script>
      // add //
      $(function(){
        $('#bLogin').click(function(){
        
          $.post(
            "http://localhost/~leehojun/CC/codingclub/Member/rpcJoinMember"
            ,{
               "usn" : $('#usn').val()
              ,"user_name" : $('#user_name').val()
              ,"hp" : $('#hp').val()
              ,"school" : $('#school').val()
              ,"grde" : $('#grde').val()
              ,"addrcode" : $('#addrcode').val()
            }
            ,function(data, status){
              if(status == 'success' && data.code == 1)
              {
                alert("기본정보 입력이 완료 되었습니다. \n 신청버튼을 다시 한번 눌러 주세요"); 
                window.location.replace("http://localhost/~leehojun/CC/codingclub/Course"); 
              }
              else
              {
                alert('틀렸단다');
              }
            }
          );
          
        });
      });
    </script>
