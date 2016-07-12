<!doctype html>
<html lang="utf-8">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coding Club</title>
	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-65409956-1', 'auto');
    ga('send', 'pageview');

  </script>
</head>
<!--form name="fo" action="submit.php" method="post"-->
<body id="wrapper">

    <nav class="navbar  navbar-inverse navbar-fixed-top" style="background-color:rgba(0,0,0,1); border: 0;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./" style="color: white;" ><strong>주니어 썸머 캠프</strong></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
            <li><a href="" >Program</a></li>
            <li class="active"><a href="">Apply</a></li>
            <li><a href="">Location</a></li>
            <li><a href="http://codingclubs.org/" style="color: white;">코딩클럽</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div class="container" style="padding-top: 50px; margin-bottom: 50px;">
		<div class="container" style="margin-top: 10px;">
			<h2>[코딩클럽] 주니어소프트웨어클럽x세종대 여름학기 8월 프로그램 참가신청서</h2>
			<div style="margin-left: 20px; margin-top: 20px;">
			<p>
      재밌는 컴퓨팅, 신나는 메이킹, 즐거운 소프트웨어!
      주니어소프트웨어클럽은 친구들과 함께 직접 원하는 컨텐츠를 디자인하고, 애니메이션/ 게임/ 앱/ 웹과 같은 소프트웨어로 만들어보는 즐거운 코딩클럽 주니어들을 위한 디지털창작모임입니다! 주니어소프트웨어클럽 활동은 담임선생님 한명이 소규모 모둠 (4-6명)을 담당, 다양한 팀프로젝트를 중심으로 진행되며, 주니어소프트웨어클럽 멤버에게는 코딩클럽 청년샘의 1:1 멘토링이 제공됩니다.  
      코딩클럽 주니어소프트웨어클럽은 16년 7월부터 프로그램별 20시간의 학기제로 운영되며, 세종대학교 SW중심대학과 함께합니다. 
      </p>
			</div>
		</div>
    <div style="border: 3px solid; border-color: gray; width: 90%; text-align: center;  margin-left: 5%; margin-top: 20px;">
			<h4>참가확정은 참가비 입금순으로 관리자 확인 후 사이트에 공지되오니 참고 부탁드립니다.</h4>
			<h4>참가비납입: 신한은행 110-203-879580</h4>
			<p>(입금주는 신청자 성함(참가자 성함) 형식으로 입금부탁드립니다.)</p>
		</div>
	 	<div  style="border: 3px solid; border-color: gray; width: 90%; margin-left: 5%; margin-top: 20px;">
			<form style="margin-left: 5%; margin-right: 5%; margin-top: 3%;" id="apply">
			  <div class="form-group">
          <label style="margin-top: 10px;">ID<label style="color:red;">*</label></label>
          
          <p>
            <input type="text" class="form-control"  style="border-radius: 0; width: 100%;" name="account_id" id="account_id" placeholder="codingclub@gmail.com">
				    <a class="btn btn-default btn-lg" id="bIdCheck">ID 중복확인</a>
          </P> 
          
          <label style="margin-top: 10px;">PWD<label style="color:red;">*</label></label>
          <input type="password" class="form-control"  style="border-radius: 0; width: 100%;" name="passwd1" id="passwd1" placeholder="비밀번호입력">
          <label style="margin-top: 10px;">PWD 확인<label style="color:red;">*</label></label>
          <input type="password" class="form-control"  style="border-radius: 0; width: 100%;" name="passwd2" id="passwd2" placeholder="비밀번호확인">
          
          <HR width="100%" style="color:red; background-color:red; height:1px; border:none" />

          <label style="margin-top: 10px;">참여신청학부모 성명 <label style="color:red;">*</label></label>
			    <input type="text" class="form-control"  style="border-radius: 0; width: 100%;" name="pname" id="pname" placeholder="학부모님 성명">
	        <label style="margin-top: 10px;">참여신청학부모 전화번호 <label style="color:red;">*</label></label>
			    <input type="text" class="form-control"  style="border-radius: 0; width: 100%;" name="php" id="php" placeholder="'-' 를 빼고 입력 부탁 드립니다.">
			    <label style="margin-top: 10px;">참여신청학부모 E-mail <label style="color:red;">*</label></label>
			    <input type="text" class="form-control"  style="border-radius: 0; width: 100%;" name="pemail" id="pemail" placeholder="학부모님 이메일">
				  <label style="margin-top: 10px;">참여신청학부모 직업&전공 <label style="color:red;">*</label></label>
			    <input type="text" class="form-control"  style="border-radius: 0; width: 100%;" name="pjob" id="pjob" placeholder="학부모님 직업 및 전공 ">
			    <label style="margin-top: 10px;">참여신청학부모 학력 <label style="color:red;">*</label></label>
			    <input type="text" class="form-control"  style="border-radius: 0; width: 100%;" name="pschool" id="pschool" placeholder="학부모님 학력 ">
			    <label style="margin-top: 10px;">거주지역<label style="color:red;">*</label></label>
			    <input type="text" class="form-control"  style="border-radius: 0; width: 100%;" name="addrcode" id="addrcode" placeholder="거주지역">
			   
          <HR width="100%" style="color:red; background-color:red; height:1px; border:none" />
         
          <label style="margin-top: 10px;">참여신청학생 성명 <label style="color:red;">*</label></label>
			    <input type="text" class="form-control"  style="border-radius: 0; width: 100%;" name="name" id="name" placeholder="학생이름">
	        <label style="margin-top: 10px;">참여신청학생 학년 <label style="color:red;">*</label></label>
          <select id='grde' class="form-control">
            <option value="E1" >초등 1</option>
            <option value="E2" >초등 2</option>
            <option value="E3" >초등 3</option>
            <option value="E4" >초등 4</option>
            <option value="E5" >초등 5</option>
            <option value="E6" >초등 6</option>
            <option value="M1" >중등 1</option>
            <option value="M2" >중등 2</option>
            <option value="M3" >중등 3</option>
            <option value="H1" >고등 1</option>
            <option value="H2" >고등 2</option>
            <option value="H3" >고등 3</option>
          </select>
          <label style="margin-top: 10px;">참여신청학생 학교 <label style="color:red;">*</label></label>
			    <input type="text" class="form-control"  style="border-radius: 0; width: 100%;" name="school" id="school" placeholder="학교이름 예) 코딩초등학교">
	
          <HR width="100%" style="color:red; background-color:red; height:1px; border:none" />

			  	<label style="margin-top: 10px;">참가신청프로그램<label style="color:red;">*</label></label>
          <div class="radio">
            <label><input type="radio" name="course_idx" id="course_idx" value="1" > 주니어메이커</label>
            <label><input type="radio" name="course_idx" id="course_idx" value="2" > IoT메이커</label>
          </div>
						
				  <label style="margin-top: 10px;">참가자가 주니어소프트웨어클럽 프로그램 참여 경험이 있다면 피드백 및 건의사항 부탁립니다<label style="color:red;">*</label></label>
			    <textarea class="form-control" style="border-radius: 0; width: 100%;" name="recommend" id="recommend"></textarea>
					<label style="margin-top: 10px;">주니어소프트웨어클럽 참가 동기, 목적 <label style="color:red;">*</label></label>
			    <textarea class="form-control" style="border-radius: 0; width: 100%;" name="motive" id="motive"></textarea>
				  <label style="margin-top: 10px;">주니어소프트웨어클럽 참가 및 향후 커뮤니케이션을 위해 코딩클럽 페이스북 그룹 가입 및 페이지 좋아요는 필수입니다. 가입 여부 확인 부탁 드리며, 아직 회원이 아니시면 가입 후 확인 부탁드립니다. <label style="color:red;">*</label></label>
	        <div class="checkbox">
            <label><input type="checkbox" id="like_tf1" name="like_tf1" value="1" >코딩클럽 페이지 좋아요 등록하였습니다. www.facebook.com/codingclubs</label>
            <label><input type="checkbox" id="like_tf2" name="like_tf2" value="2" >코딩클럽 그룹 가입하였습니다. www.facebook.com/groups/CodingClubKorea</label>
          </div>
					
          <label style="margin-top: 10px;">참여학생의 소프트웨어/컴퓨터과학/코딩 교육 경험을 간단히 설명해주세요.<label style="color:red;">*</label></label>
			    <textarea class="form-control" style="border-radius: 0; width: 100%;" name="experience" id="experience"></textarea>
				  <label style="margin-top: 10px;">참여신청 학생의 성향 및 성격은? <label style="color:red;">*</label></label>
			    <textarea class="form-control" style="border-radius: 0; width: 100%;" name="nature" id="nature"></textarea>
				  <label style="margin-top: 10px;">참여신청 학생이 선호하고 즐기거나 잘하는 학과목, 방과후 수업은? 선호하지 않거나 싫어하는 것은?<label style="color:red;">*</label></label>
			    <textarea class="form-control" style="border-radius: 0; width: 100%;" name="favor" id="favor"></textarea>
				  <label style="margin-top: 10px;">코딩클럽 주니어소프트웨어클럽 프로그램에서 바라는 점<label style="color:red;">*</label></label>
			    <textarea class="form-control" style="border-radius: 0; width: 100%;" name="jr_hope" id="jr_hope"></textarea>
					
          <label style="margin-top: 10px;">본 프로그램을 알게된 경로<label style="color:red;">*</label></label>
				  <div class="radio">
            <label><input type="radio" name="channel" value="코딩클럽 페이스북 그룹" >코딩클럽 페이스북 그룹</label>
            <label><input type="radio" name="channel" value="코딩클럽 페이스북 페이지" >코딩클럽 페이스북 페이지</label>
            <label><input type="radio" name="channel" value="코딩클럽 홈페이지" >코딩클럽 홈페이지</label>
            <label><input type="radio" name="channel" value="코딩클럽 제1회 학부모클럽세미나 '소프트웨어교육 인사이드아웃'" >코딩클럽 제1회 학부모클럽세미나 '소프트웨어교육 인사이드아웃'</label>
            <label><input type="radio" name="channel" value="검색" >검색</label>
            <label><input type="radio" name="channel" value="뉴스 등 언론" >뉴스 등 언론</label>
            <label><input type="radio" name="channel" value="지인추천" >지인추천</label>
            <label><input type="radio" name="channel" value="온오프믹스" >온오프믹스</label>
            <label><input type="radio" name="channel" value="" >기타</label>
          </div>
			    <input type="text" class="form-control"  style="border-radius: 0; width: 100%;" name="channel_txt" id="channel_txt" placeholder="프로그램을 알게된 경로">
				
          <label style="margin-top: 10px;">코딩클럽에 바라는점<label style="color:red;">*</label></label>
			    <textarea class="form-control" style="border-radius: 0; width: 100%;" name="club_hope" id="club_hope"></textarea>
				  <label style="margin-top: 10px;">문의사항<label style="color:red;">*</label></label>
			    <textarea class="form-control" style="border-radius: 0; width: 100%;" name="inquiry" id="inquiry"></textarea>
			  </div>
			</form>
			
      <div class="text-center">
				<a class="btn btn-default btn-lg" name="bSend" id="bSend" style="border-radius: 0; margin-top: 40px; margin-bottom: 30px;">신청</a>
			</div>
		</div>

  <input type='hidden' name='idCheck' id='idCheck' value=''>
	
  </div>
  <script>
    $(function(){
      $('#bSend').click(function(){
      
        var like_tf = $('#like_tf1').val() + '|' + $('#like_tf2').val(); 
        
        $.post(
          "http://localhost/~leehojun/CC/codingclub/Member/rpcJoin"
          ,{
            // account
             "account_id" : $('#account_id').val()
            ,"passwd1" : $('#passwd1').val()
            ,"passwd2" : $('#passwd2').val()
            
            // user 
            ,"name" : $('#name').val()
            ,"school" : $('#school').val()
            ,"grde" : $('#grde').val()
            ,"addrcode" : $('#addrcode').val()
            ,"pname" : $('#pname').val()
            ,"php" : $('#php').val()
            ,"pemail" : $('#pemail').val()
            ,"pjob" : $('#pjob').val()
            ,"pschool" : $('#pschool').val()
          
            // member_svc 
            ,"course_idx" : $(":input:radio[name=course_idx]:checked").val() 

            // questionnaire
            
            ,"recommend" : $('#recommend').val()
            ,"motive" : $('#motive').val()
            ,"like_tf" : like_tf 
            ,"experience" : $('#experience').val()
            ,"nature" : $('#nature').val()
            ,"favor" : $('#favor').val()
            ,"jr_hope" : $('#jr_hope').val()
            ,"channel" : $(":input:radio[name=channel]:checked").val() 
            ,"club_hope" : $('#club_hope').val()
            ,"inquiry" : $('#inquiry').val()
          }
          ,function(data, status){
            if(status == 'success' && data.code == 1)
            {
              window.location.replace("http://codingclubs.org"); 
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
      
        $.post(
          "http://localhost/~leehojun/CC/codingclub/Member/rpcIdCheck"
          ,{
             "account_id" : $('#account_id').val()
            ,"idCheck" : $('#idCheck').val()
          }
          ,function(data, status){
            if(status == 'success' && data.code == 1)
            {
              alert('사용가능한 아이디 입니다');
              $('#idCheck').val('1');
            }
            else if(data.code == 999)
            {
              alert('중복된 아이디 입니다');
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
</body>



<!--/form-->
</html>
