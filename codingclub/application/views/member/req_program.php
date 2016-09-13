<!doctype html>
<html lang="utf-8">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 ,maximum-scale=1.0, minimum-scale=1.0,user-scalable=no,target-densitydpi=medium-dpi" />
	<title>Coding Club</title>
	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<!-- 주니어 썸머 캠프 CSS -->
	<link href="../../static/css/summercamp.css" rel="stylesheet">

	<!-- textarea height 자동 늘림 -->
	<script>
    function resize(obj) {
      obj.style.height = "1px";
      obj.style.height = (obj.scrollHeight)+"px";
    }
	</script>
  
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
<body id="wrapper" class="summercamp_join">
 
    <nav class="navbar  navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://codingclubs.org"><strong>주니어</strong>소프트웨어클럽</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
            <!--li><a href="" >Program</a></li-->
            <li class="active"><a href="">Apply</a></li>
            <!--li><a href="">Location</a></li-->
            <li><a href="http://member.codingclubs.org/Member/privacy">개인정보취급방침</a></li>
            <li><a href="http://codingclubs.org/" style="color: white;">코딩클럽</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div class="page_banner">
		<div class="container">
			<div class="absolute_box">
				<div class="camp_info">
					<div class="camp_txt">
						<h3>재밌는 컴퓨팅,<br>신나는 메이킹,<br>즐거운 소프트웨어!<i>코딩클럽</i></h3>
						
						<p><strong>주니어소프트웨어클럽</strong>은 <br>주니어소프트웨어클럽은 친구들과 함께 직접 원하는 컨텐츠를 디자인하고, 애니메이션/ 게임/ 앱/ 웹과 같은 소프트웨어로 만들어보는 즐거운 코딩클럽 주니어들을 위한 디지털창작모임입니다!<br>주니어소프트웨어클럽 활동은 담임선생님 한명이 소규모 모둠 (5-6명)을 담당, 다양한 팀프로젝트를 중심으로 진행되며, 주니어소프트웨어클럽 멤버에게는 코딩클럽 청년샘의 1:1 멘토링이 제공됩니다.</p>            
 
					</div>
					<div class="camp_intro">
						<h3>참가 확정 및<br>신청비 입금안내</h3>
						<p>참가확정은 참가비 입금순으로 관리자 확인 후 사이트에 공지되오니 참고 부탁드립니다.<br>참가비납입: 신한은행 110-203-879580<br>(입금주는 신청자 성함(참가자 성함) 형식으로 입금부탁드립니다.)</p>
					</div>
				</div>
			</div>
		</div>
	</div>

  <div class="page_cont">

		<div class="container">
			<h3>캠프 신청서</h3>
				<form class="apply_form" id="apply">
					<div class="form-group">
						<p class="privacy">
							<label><input type="checkbox" id="agree" name="agree">&nbsp;개인정보 수집에 동의하십니까?</label>
							<span>프로그램 신청자 사전조사 및 그룹편성, 운영, 프로그램 공지 및 관련 정보 공유를 목적으로 한 수집입니다. 이 외의 용도로 사용하지 않습니다.<i>*</i></span>
              <span><a href="http://member.codingclubs.org/Member/privacy">개인정보취급방침자세히보기</a></span>
						</p>
						<p class="privacy">
							<label><input type="checkbox" id="agree2" name="agree2">&nbsp;본 프로그램 참여 시 회원 및 신청자, 참가자의 사진, 영상 및 프로젝트 결과물 등이 코딩클럽 활동에 활용될 수 있습니다.</label>
							<span>회원 및 신청자, 참가자, 운영자의 활동 공유는 코딩클럽 교육활동의 중요 가치이므로 참가시 동의 필요한 점 양해 부탁드립니다.<i>*</i></span>
						</p>
            <p class="privacy">
							<label><input type="checkbox" id="agree3" name="agree3">&nbsp;코딩클럽 회원 및 참가자에게 보내는 광고성 정보의 수신에 동의합니다.</label>
							<span>관련 법규에 따라 교육 프로그램, 서비스, 참가비 안내 등 코딩클럽이 보내는 모든 정보가 광고성으로 분류되어 동의 필요 한 점 양해 부탁드립니다.<i>*</i></span>
						</p>
            <p class="privacy">
              <label><input type="checkbox" id="agree4" name="agree4">&nbsp;<font color=red> * </font>항목은 필수 작성 필요 문항입니다. 또한 본 신청서를 작성함으로써 코딩클럽의 온라인/오프라인 회원으로 가입한 것에 동의합니다. <i>*</i></label>
              <span>코딩클럽이 제공하는 프로그램 참가를 위해 회원가입은 반드시 필요합니다. 향후 코딩클럽의 웹사이트 서비스 로그인은 신청 시 작성한 이메일로 접속 가능합니다.</span>
            </p> 
						<ul class="form-cont">
							<li class="form-id">
								<label>ID <i>*</i></label>
								<p>
                <input type="hidden" name="usn" id="usn" value="<?=$oAccount->usn?>"> 
								<input type="text" class="form-control" name="account_id" id="account_id" value="<?=$oAccount->account_id?>" disabled placeholder="codingclub@gmail.com">
                </p> 
							</li>
							<li>
								<label>참여신청학부모 성명 <i>*</i></label>
								<input type="text" class="form-control" name="pname" id="pname" value=<?=$oUserInfo?$oUserInfo->pname:'""'?> placeholder="학생이 아닌 학부모님 성함을 기입해주십시오">
								<label>참여신청학부모 전화번호 <i>*</i></label>
								<input type="text" class="form-control" name="php" id="php" value=<?=$oUserInfo?$oUserInfo->php:'""'?> placeholder="예: 010-3245-8095, 필히 XXX-XXXX-XXXX 형태로 연락을 위해 정확히 부탁 드립니다.">
								<label>참여신청학부모 E-mail <i>*</i></label>
								<input type="text" class="form-control" name="pemail" id="pemail" value=<?=$oUserInfo?$oUserInfo->pemail:'""'?> placeholder="연락을 위해 정확하게 작성 부탁 드립니다.">
								<label>참여신청학부모 직업&전공 <i>*</i></label>
								<input type="text" class="form-control" name="pjob" id="pjob" value=<?=$oUserInfo?$oUserInfo->pjob:'""'?> placeholder="학부모님 직업 및 전공 ">
								<input type="hidden" class="form-control" name="pschool" id="pschool" placeholder="학부모님 학력 ">
								<label>거주지역 <i>*</i></label>
								<input type="text" class="form-control" name="addrcode" id="addrcode" value=<?=$oUserInfo?$oUserInfo->addrcode:'""'?> placeholder="예: 서울시 송파구 방이동">
							</li>
							<li>
								<label>참여신청학생 성명 <i>*</i></label>
								<input type="text" class="form-control" name="name" id="name" value=<?=$oUserInfo?$oUserInfo->name:'""'?> <?=$oUserInfo?'disabled':'""'?>placeholder="학생이름">
								<label>참여신청학생 학년 <i>*</i></label>
								<select id='grde' class="form-control">
								<?php
                $myGrde = '';
                if($oUserInfo) $myGrde = $oUserInfo->grde;
                
                foreach($aGrdeConfig as $key=>$val)
                {
                  if($val == $myGrde)
                    echo "<option value='".$key."' selected >".$val."</option>\n";
                  else
                    echo "<option value='".$key."'>".$val."</option>\n";
                }
                ?>
                </select>
								
                <label>참여신청학생 학교 <i>*</i></label>
								<input type="text" class="form-control" name="school" id="school" value=<?=$oUserInfo?$oUserInfo->school:'""'?> placeholder="학교이름 예) 코딩초등학교">
							</li>
							<li>
								<label>10월 주니어소프트웨어클럽 가을학기 참가신청 프로그램<br>(2개반 신청 시 복수 선택해 주세요)<i>*</i></label>
								<div class="checkbox">
                <?php
                  foreach($aCourse as $key=>$val)
                  {
                    if($val['value'] == $courseIDX)
                      echo '<label><input type="checkbox" name="'.$key.'" id="'.$key.'" value="'.$val['value'].'" checked> '.$val['name'].'</label>';
                    else
                      echo '<label><input type="checkbox" name="'.$key.'" id="'.$key.'" value="'.$val['value'].'" > '.$val['name'].'</label>';
                    
                    echo "\n";
                  }
                ?>
								</div>
                <label>참가자가 코딩클럽주니어소프트웨어클럽 프로그램에 참여한 적이 있다면, 어떤 프로그램에 참여했나요?<i>*</i></label>
								<div class="checkbox">
								<label><input type="checkbox" name="ex1" id="ex1" value="1" >15.3월 주니어소프트웨어캠프</label><br>
								<label><input type="checkbox" name="ex2" id="ex2" value="2" >15.4-5월 애니메이션메이커</label><br>
								<label><input type="checkbox" name="ex3" id="ex3" value="3" >15.6-7월 게임메이커</label><br>
								<label><input type="checkbox" name="ex4" id="ex4" value="4" >15.8월 주니어해커톤</label><br>
								<label><input type="checkbox" name="ex5" id="ex5" value="5" >15.9월 디자인으로생각하는 주니어해커</label><br>
								<label><input type="checkbox" name="ex6" id="ex6" value="6" >15.10월 주니어스크래처</label><br>
								<label><input type="checkbox" name="ex7" id="ex7" value="7" >15.10월 애니메이션메이커</label><br>
								<label><input type="checkbox" name="ex8" id="ex8" value="8" >15.10월 앱메이커</label><br>
								<label><input type="checkbox" name="ex9" id="ex9" value="9" >15.12월 주니어스크래처</label><br>
								<label><input type="checkbox" name="ex10" id="ex10" value="10" >15.12월 게임메이커</label><br>
								<label><input type="checkbox" name="ex11" id="ex11" value="11" >15.12월 앱메이커</label><br>
								<label><input type="checkbox" name="ex12" id="ex12" value="12" >16.2월 주니어스크래처</label><br>
								<label><input type="checkbox" name="ex13" id="ex13" value="13" >16.2월 애니메이션메이커</label><br>
								<label><input type="checkbox" name="ex14" id="ex14" value="14" >16.2월 앱메이커</label><br>
								<label><input type="checkbox" name="ex15" id="ex15" value="15" >16.3월 디자인으로생각하는 주니어해커</label><br>
								<label><input type="checkbox" name="ex16" id="ex16" value="16" >16.4월 게임메이커</label><br>
								<label><input type="checkbox" name="ex17" id="ex17" value="17" >16.4월 앱메이커</label><br>
								<label><input type="checkbox" name="ex18" id="ex18" value="18" >16.7월 주니어메이커</label><br>
								<label><input type="checkbox" name="ex19" id="ex19" value="19" >16.7월 앱메이커</label><br>
								<label><input type="checkbox" name="ex19" id="ex20" value="20" >16.8월 썸머캠프 - 주니어메이커</label><br>
								<label><input type="checkbox" name="ex19" id="ex21" value="21" >16.8월 썸머캠프 - Iot메이커</label><br>
								<label><input type="checkbox" name="ex19" id="ex22" value="22" >16.8월 썸머캠프 - 앱메이커</label><br>
								</div>										
								<input type="text" class="form-control" name="ex_999" id="ex_999" placeholder="기타프로그램참여">
								
                <label>참가자가 주니어소프트웨어클럽 프로그램 참여 경험이 있다면 피드백 및 건의사항 부탁 드립니다 <i>*</i></label>
								<textarea class="form-control" name="recommend" id="recommend" onkeyup="resize(this)" placeholder="피드백 및 건의사항"></textarea>
								<label>주니어소프트웨어클럽 참가 동기, 목적 <i>*</i></label>
								<textarea class="form-control" name="motive" id="motive" onkeyup="resize(this)" placeholder="참가 동기, 목적"></textarea>
								<label>주니어소프트웨어클럽 참가 및 향후 커뮤니케이션을 위해 코딩클럽 페이스북 그룹 가입 및 페이지 좋아요는 필수입니다. 가입 여부 확인 부탁 드리며, 아직 회원이 아니시면 가입 후 확인 부탁드립니다. <i>*</i></label>
								<div class="checkbox">
								<label><input type="checkbox" id="like_tf1" name="like_tf1" value="1" >코딩클럽 페이지 좋아요 등록하였습니다.</label>
								<a href="http://www.facebook.com/codingclubs" target="_blank">www.facebook.com/codingclubs</a><br>
								<label><input type="checkbox" id="like_tf2" name="like_tf2" value="2" >코딩클럽 그룹 가입하였습니다.</label>
								<a href="http://www.facebook.com/groups/CodingClubKorea" target="_blank">www.facebook.com/groups/CodingClubKorea</a>
								</div>

								<label>참여학생의 소프트웨어/컴퓨터과학/코딩 교육 경험을 간단히 설명해주세요. <i>*</i></label>
								<textarea class="form-control" name="experience" id="experience" onkeyup="resize(this)" placeholder="교육 경험"></textarea>
								<label>참여신청 학생의 성향 및 성격은? <i>*</i></label>
								<textarea class="form-control" name="nature" id="nature" onkeyup="resize(this)" placeholder="학생의 성향 및 성격"></textarea>
								<label>참여신청 학생이 선호하고 즐기거나 잘하는 학과목, 방과후 수업은? 선호하지 않거나 싫어하는 것은? <i>*</i></label>
								<textarea class="form-control" name="favor" id="favor" onkeyup="resize(this)" placeholder="참여신청"></textarea>
								<textarea class="form-control" name="jr_hope" id="jr_hope" onkeyup="resize(this)" placeholder="프로그램에서 바라는 점"></textarea>

								<label>본 프로그램을 알게 된 경로 <i>*</i></label>
								<div class="radio">
								<label><input type="radio" name="channel" value="코딩클럽 페이스북 그룹" >코딩클럽 페이스북 그룹</label>
								<label><input type="radio" name="channel" value="코딩클럽 페이스북 페이지" >코딩클럽 페이스북 페이지</label>
								<label><input type="radio" name="channel" value="코딩클럽 홈페이지" >코딩클럽 홈페이지</label>
								<label><input type="radio" name="channel" value="코딩클럽 제1회 학부모클럽세미나 '소프트웨어교육 인사이드아웃'" >코딩클럽 제1회 학부모클럽세미나 '소프트웨어교육 인사이드아웃'</label>
								<label><input type="radio" name="channel" value="검색" >검색</label>
								<label><input type="radio" name="channel" value="뉴스 등 언론" >뉴스 등 언론</label>
								<label><input type="radio" name="channel" value="지인추천" >지인추천</label>
								<label><input type="radio" name="channel" value="온오프믹스" >온오프믹스</label>
								<label><input type="radio" name="channel" value="999" >기타</label>
								</div>
								<input type="text" class="form-control" name="channel_txt" id="channel_txt" placeholder="프로그램을 알게된 경로">

								<label>코딩클럽에 바라는 점 </label>
								<textarea class="form-control" name="club_hope" id="club_hope" onkeyup="resize(this)" placeholder="코딩클럽에 바라는 점"></textarea>
								<label>문의사항 </label>
								<textarea class="form-control" name="inquiry" id="inquiry" onkeyup="resize(this)" placeholder="문의사항"></textarea>
                
              </li>
						</ul>
      
					</div>
        </form>
			  

			
        <div class="text-center">
          <label></label>
        </div>
        <div class="text-center">
					<a class="btn btn-default btn-lg" name="bSend" id="bSend">신청</a>
				</div>
			</div>

			<input type='hidden' name='idCheck' id='idCheck' value=''>
	
		</div>
  
	</div>
  <script>
    
    $(function(){
      $('#bSend').click(function(){
     
        if ($("input:checkbox[id='agree']").is(":checked") == false)
        {
          alert('개인정보 수집에 동의 해 주세요');
          $('#agree').focus();
          return;
        }
        if ($("input:checkbox[id='agree2']").is(":checked") == false)
        {
          alert('활용동의 해 주세요');
          $('#agree2').focus();
          return;
        }
        if ($("input:checkbox[id='agree3']").is(":checked") == false)
        {
          alert('정보수신동의 해 주세요');
          $('#agree3').focus();
          return;
        }
        if ($("input:checkbox[id='agree4']").is(":checked") == false)
        {
          alert('회원가입 동의 해 주세요');
          $('#agree4').focus();
          return;
        }
        var regExp = /[0-9a-zA-Z][_0-9a-zA-Z-]*@[_0-9a-zA-Z-]+(\.[_0-9a-zA-Z-]+){1,2}$/;
        var strValue = $('#account_id').val(); 
        if (!strValue.match(regExp))
        {
          alert( "ID는 이메일 형식으로 입력하세요");
          $('#account_id').focus();
          return;
        }

        var course_idx = $("input:checkbox[name=course_idx1]:checked").val() + '|' 
             + $("input:checkbox[name=course_idx2]:checked").val() + '|' 
             + $("input:checkbox[name=course_idx3]:checked").val();

        var like_tf = $('#like_tf1').val() + '|' + $('#like_tf2').val(); 
        var exprogram = 
               $("input:checkbox[name=ex1]:checked").val() + '|' 
             + $("input:checkbox[name=ex2]:checked").val() + '|'
             + $("input:checkbox[name=ex3]:checked").val() + '|'
             + $("input:checkbox[name=ex4]:checked").val() + '|'
             + $("input:checkbox[name=ex5]:checked").val() + '|'
             + $("input:checkbox[name=ex6]:checked").val() + '|'
             + $("input:checkbox[name=ex7]:checked").val() + '|'
             + $("input:checkbox[name=ex8]:checked").val() + '|'
             + $("input:checkbox[name=ex9]:checked").val() + '|'
             + $("input:checkbox[name=ex10]:checked").val() + '|'
             + $("input:checkbox[name=ex11]:checked").val() + '|'
             + $("input:checkbox[name=ex12]:checked").val() + '|'
             + $("input:checkbox[name=ex13]:checked").val() + '|'
             + $("input:checkbox[name=ex14]:checked").val() + '|'
             + $("input:checkbox[name=ex15]:checked").val() + '|'
             + $("input:checkbox[name=ex16]:checked").val() + '|'
             + $("input:checkbox[name=ex17]:checked").val() + '|'
             + $("input:checkbox[name=ex18]:checked").val() + '|'
             + $("input:checkbox[name=ex19]:checked").val() + '|'
             + $('#ex_999').val() ;


        if($.trim($('#pname').val()) == '')
        {
          alert('학부모이름을 입력해 주세요.');
          $('#pname').focus();
          return;
        }
        if($.trim($('#php').val()) == '')
        {
          alert('학부모핸드폰번호를 입력해 주세요.');
          $('#php').focus();
          return;
        }
        if($.trim($('#pemail').val()) == '')
        {
          alert('학부모 이메일을 입력해 주세요.');
          $('#pemail').focus();
          return;
        }
        if($.trim($('#pjob').val()) == '')
        {
          alert('학부모 직업을 입력해 주세요.');
          $('#pjob').focus();
          return;
        }
        
        if($.trim($('#addrcode').val()) == '')
        {
          alert('거주지역을 입력해 주세요.');
          $('#addrcode').focus();
          return;
        }
        
        if($.trim($('#name').val()) == '')
        {
          alert('학생이름을 입력해 주세요.');
          $('#name').focus();
          return;
        }
        if($.trim($('#school').val()) == '')
        {
          alert('참여신청 학생 학교를 입력해 주세요.');
          $('#school').focus();
          return;
        }
        if($.trim($('#grde').val()) == '')
        {
          alert('참여신청 학생 학년을 입력해 주세요.');
          $('#grde').focus();
          return;
        }
        if(course_idx == '||')
        {
          alert('참가신청프로그램을 선택해 주세요');
          $('#course_idx').focus();
          return;
        }
        if($.trim($('#recommend').val()) == '')
        {
          alert('피드백 및 건의 사항 작성을 부탁 드립니다.');
          $('#recommend').focus();
          return;
        }
        if($.trim($('#motive').val()) == '')
        {
          alert('동기 및 목적 작성을 부탁 드립니다.');
          $('#motive').focus();
          return;
        }
        if(like_tf == '|')
        {
          alert('코딩클럽 페이지, 그룹 가입 체크 부탁 드립니다.');
          $('#like_tf').focus();
          return;
        }
        if($.trim($('#experience').val()) == '')
        {
          alert('코딩교육 경험을 작성해 주세요');
          $('#experience').focus();
          return;
        }
        if($.trim($('#nature').val()) == '')
        {
          alert('학생의 성향 및 성격 작성 부탁 드립니다.');
          $('#nature').focus();
          return;
        }
        if($.trim($('#favor').val()) == '')
        {
          alert('학생의 선호 하고나 싫어하는 부분을 적어 주세요');
          $('#favor').focus();
          return;
        }
        if($.trim($('#jr_hope').val()) == '')
        {
          alert('주니어소프트웨어 클럽에 바라는 점을 적어 주세요');
          $('#jr_hope').focus();
          return;
        }
        if($.trim($("input:radio[name=channel]:checked").val()) == 999)
        {
          var channel_txt = $.trim($("#channel_txt").val());
        }
        else
        {
          var channel_txt = $.trim($("input:radio[name=channel]:checked").val());
        }
        if(channel_txt == '')
        {
          alert('알게된 경로를 선택해 주세요');
          return;
        }

        $.post(
          "<?=HOSTURL?>/Member/rpcReqProgram"
          ,{
            // account
             "account_id" : $('#account_id').val()
            ,"usn" : $('#usn').val()
            
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
            ,"course_idx" : course_idx 

            // questionnaire
            ,"recommend" : $('#recommend').val()
            ,"motive" : $('#motive').val()
            ,"like_tf" : like_tf 
            ,"experience" : $('#experience').val()
            ,"nature" : $('#nature').val()
            ,"favor" : $('#favor').val()
            ,"jr_hope" : $('#jr_hope').val()
            ,"channel" : channel_txt 
            ,"club_hope" : $('#club_hope').val()
            ,"inquiry" : $('#inquiry').val()
            ,"exprogram" : exprogram 
          }
          ,function(data, status){
            if(status == 'success' && data.code == 1)
            {
              alert("신청이 완료 되었습니다. \n감사합니다.");
              window.location.replace("http://codingclubs.org"); 
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
