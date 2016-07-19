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
	<link href="../static/css/summercamp.css" rel="stylesheet">

	<!-- textarea height 자동 늘림 -->
	<script>
    function resize(obj) {
      obj.style.height = "1px";
      obj.style.height = (obj.scrollHeight)+"px";
    }
	</script>

	<!-- 탭 -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript">
	//<![CDATA[
	$(window).load(function(){
	$(document).ready(function() {
		$(".tabs-menu a").click(function(event) {
			event.preventDefault();
			$(this).parent().addClass("current");
			$(this).parent().siblings().removeClass("current");
			var tab = $(this).attr("href");
			$(".tab-content").not(tab).css("display", "none");
			$(tab).fadeIn();
		});
	});
	});//]]> 
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
<body id="wrapper" class="basic_pg">

    <nav class="navbar  navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">주니어 썸머 캠프</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
            <!--li><a href="" >Program</a></li>
            <li class="active"><a href="">Apply</a></li>
            <li><a href="">Location</a></li>
            <li><a href="http://codingclubs.org/">코딩클럽</a></li>
            <li class="sign_in" style="display:none"><a href="#">회원가입</a></li>
            <li class="my_page"><a href="#">마이페이지</a></li>
            <li class="sign_up" style="display:none"><a href="#">로그인</a></li>
            <li class="sign_out"><a href="#">로그아웃</a></li-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<!-- container :: s -->
	<section id="container">

		<!-- contents :: s -->
		<section id="contents">

			<!-- 개인정보취급방침 :: s -->
			<div class="privacy">			
				
				<div class="container">	
					<h3>개인정보취급방침</h3>	

					<div class="privacy_list">
						<h4>제1조 목적</h4>
						<ol>
							<li>
								<span>1. 코딩클럽은 이용자에게 다양한 서비스 제공을 위하여 아래와 같이 이용자의 개인정보를 수집합니다.</span>
								<p>- 코딩클럽 회원 가입 및 신청자, 참가자가 신청하는 코딩클럽 서비스의 운영 및 제공을 위해 개인정보를 요구합니다. 해당 목적으로 수집된 정보는 회원 및 코딩클럽 서비스의 신청자/ 참가자의 서비스 참가를 위한 사전조사, 그룹 편성 및 코딩클럽이 제공하는 서비스 관련 공지 및 정보 공유 등을 목적으로 이용되며, 그 외의 용도로 사용되지 않습니다.</p>
							</li>
							<li>
								<span>2. 코딩클럽은 이용자의 개인정보를 매우 중요시하며, 정보통신망 이용촉진 및 정보보호 등에 관한 법률 등 정보통신서비스제공자가 준수하여야 할 관련 법령상의 개인정보보호 규정을 준수하고 있습니다. 코딩클럽은 개인정보취급방침을 통하여 이용자가 제공하는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다. 코딩클럽은 개인정보취급방침을 홈페이지에 공개함으로써 이용자가 언제든지 쉽게 볼 수 있도록 조치하고 있습니다.</span>
							</li>
							<li>
								<span>3. 코딩클럽은 필요에 의하여 개인정보취급방침을 개정하는 경우 홈페이지의 공지사항을 통해 이용자에게 공지한 후 개정된 사항을 이용자가 쉽게 알아볼 수 있도록 하고 있습니다.</span>
							</li>
						</ol>
						<hr>
						<h4>제2조 개인정보 수집ㆍ이용에 대한 동의</h4>
						<p>코딩클럽은 이용자의 회원가입 시 또는 서비스 이용 시 서비스이용약관 및 개인정보의 수집·이용 등 활용에 대한 동의절차를 마련하여, [동의]를 선택하면 개인정보 수집·이용에 동의한 것으로 봅니다.</p>
						<hr>
						<h4>제3조 수집하는 개인정보 항목 및 수집방법</h4>
						<ol>
							<li>
								<span>1. 코딩클럽은 회원가입, 상담, 서비스 신청 등 서비스 제공 및 계약이행을 위해 아래와 같이 개인정보를 수집할 수 있습니다.</span>
								<p>가. 회원가입 시 : 아이디, 비밀번호, 이름, 이메일주소<br>나. 서비스 신청 시: 신청자 정보(학년, 학교명), 보호자 정보(이름, 연락처, 이메일주소, 직업, 전공), 거주지역 등</p>
							</li>
							<li>
								<span>2. 서비스 이용과정에서 아래와 같은 정보들이 생성되어 수집될 수 있습니다.</span>
								<p>- 서비스 이용기록, 접속 로그, 쿠키, 접속 IP정보, 결제기록, 이용정지 기록, pc사양정보<br>- 스마트OS 탑재 모바일 기기(Tablet PC, 스마트폰 등)의 모델명, OS정보, 기기고유번호 (디바이스 아이디 또는 IMEI)</p>
								</ul>
							</li>
							<li>
								<span>3. 코딩클럽은 다음과 같은 방법으로 개인정보를 수집합니다.</span>
								<p>홈페이지, Social Network Service (예: 페이스북, 네이버, 카카오 등), 전화, 문자, 이메일 등</p>
							</li>
							<li>
								<span>4. 코딩클럽은 기본적 인권침해의 우려가 있는 개인정보(인종 및 민족, 사상 및 신조, 출신지 및 본적지, 정치적 성향 및 범죄기록, 건강상태 및 성생활 등)는 요구하지 않습니다.</span>
							</li>
						</ol>
						<hr>
						<h4>제4조 개인정보의 수집 및 이용목적</h4>
						<p>코딩클럽은 수집한 개인정보를 다음의 목적으로 활용합니다.</p>
						<ol>
							<li>1. 서비스 제공에 관한 계약 이행</li>
							<li>2. 회원 및 이용자 관리</li>
						</ol>
						<hr>
						<h4>제5조 개인정보의 공유 및 제공</h4>
						<ol>
							<li>
								<span>1. 코딩클럽은 이용자의 개인정보를 &quot;개인정보의 수집 및 이용목적&quot;에서 고지한 범위 내에서 이용하며, 이용자의 사전 동의 없이 위의 범위를 초과하여 이용하거나 타인 또는 타 기관에 제공 또는 공유하지 않습니다. 다만, 이용자가 사전에 동의한 경우나 회사의 이용약관 또는 회사가 별도로 정한 정책 및  운영규정에 어긋나는 행위를 하여 관련법에 의거하거나 수사목적으로 법령에 정해진 절차와 방법에 따라 법적인 조치가 요구되거나 관련 수사기관의 요구가 있는 경우는 예외로 합니다.</span>
							</li>
						</ol>
						<hr>
						<h4>제6조 수집한 개인정보의 보유 및 이용기간</h4>
						<ol>
							<li>
								<span>1. 이용자의 개인정보는 개인정보의 수집목적 또는 제공받은 목적이 달성되면 파기됩니다. 회원이 회원탈퇴를 하거나 개인정보 허위기재로 인해 회원 ID 삭제 처분을 받은 경우 수집된 개인정보는 완전히 삭제되며 어떠한 용도로도 이용할 수 없도록 처리됩니다. 탈퇴 후에는 코딩클럽의 회원정보 데이터베이스(DB)에서 완전히 삭제됩니다.</span>
							</li>
							<li>
								<span>2. 이용자의 개인정보는 제7조 제1항에 따라 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기되나, 아래 각 항목에 해당하는 경우에는 명시한 기간 동안 보관할 수 있으며, 그 외 다른 목적으로는 사용하지 않습니다.</span>
								<ol>
									<li>
										<span>(1) 불건전한 서비스 이용으로 서비스에 물의를 일으킨 이용자의 경우 사법기관 수사의뢰를 하거나 다른 회원을 보호할 목적으로 1년간 해당 개인정보를 보관할 수 있습니다.</span>
									</li>
									<li>
										<span>(2) 관계법령의 규정에 의하여 보관할 필요가 있는 경우 코딩클럽은 수집 및 이용 목적 달성 후에도 관계법령에서 정한 일정 기간 동안 회원의 개인정보를 보관할 수 있습니다.</span>
										<p>가. 계약 또는 청약철회 등에 관한 기록 : 5년<br>나. 대금결제 및 재화의 공급에 관한 기록 : 5년<br>다. 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년<br>라. 표시, 광고에 관한 기록 : 6개월<br>마. 웹사이트 방문기록 : 3개월</p>
									</li>
								</ol>
							</li>
						</ol>
						<hr>
						<h4>제7조 개인정보 파기절차 및 방법</h4>
						<ol>
							<li>
								<span>1. 코딩클럽은 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다.</span>
							</li>
							<li>
								<span>2. 파기 절차</span>
								<p>이용자가 회원가입 또는 서비스 이용 등을 위해 입력한 정보는 목적이 달성된 후 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라 “개인정보의 보유기간 및 이용기간”의 일정 기간 저장된 후 파기 됩니다. 개인정보는 법률에 의한 경우가 아니고서는 이용자가 동의한 이용 목적 이외의 다른 목적으로 이용되지 않습니다.</p>
							</li>
							<li>
								<span>3. 파기 방법</span>
								<p>전자적 파일 형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.</p>
							</li>
						</ol>
						<hr>
						<h4>제8조 이용자 및 법정 대리인의 권리와 그 행사방법</h4>
						<ol>
							<li>
								<span>1. 이용자는 언제든지 이용자 본인의 개인정보를 확인, 조회하거나 수정할 수 있으며 가입해지 또는 개인정보의 삭제를 요청할 수도 있습니다. 단, 서비스 제공을 위해 반드시 필요한 개인정보를 삭제하는 경우 관련 서비스를 제공받지 못할 수 있습니다.</span>
							</li>
							<li>
								<span>2. 서비스 내 [회원정보]에서 직접 본인의 개인정보를 조회, 수정하실 수 있습니다. 또한 회원은 서비스 내 [회원탈퇴]를 통하여 언제든지 이용계약을 해지를 할 수 있으며 해지 할 경우 회원의 개인정보는 모두 삭제됩니다. 단, 제7조 제3항 각 호에 해당하는 경우에는 관계법령에 따라 일정기간 보관할 수 있습니다.</span>
							</li>
							<li>
								<span>3. 이용자가 자신의 개인정보에 대한 정정 또는 삭제를 요구하는 경우 코딩클럽은 본인 여부를 확인한 후 지체 없이 필요한 조치를 취합니다.</span>
							</li>
							<li>
								<span>4. 코딩클럽은 이용자의 요청에 의해 해지 또는 삭제된 개인정보에 대해 &quot;회사가 수집하는 개인정보의 보유 및 이용기간&quot;에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.</span>
							</li>
						</ol>
						<hr>
						<h4>제9조 개인정보의 자동 수집 장치의 설치, 운영 및 그 거부에 관한 사항</h4>
						<ol>
							<li>
								<span>1. 코딩클럽은 이용자에게 개인화되고 맞춤화된 서비스를 제공하기 위해 이용자의 개인정보를 저장하고 수시로 찾아내는 쿠키(cookie)를 사용합니다. 쿠키는 웹사이트가 이용자의 컴퓨터 브라우저(인터넷익스플로러, 파이어폭스, 크롬 등)로 전송하는 소량의 정보입니다.</span>
							</li>
							<li>
								<span>2. 이용자가 웹사이트에 접속하면 회사의 컴퓨터는 이용자의 브라우저에 있는 쿠키의 내용을 읽고, 이용자의 추가정보를 이용자의 컴퓨터에서 찾아 접속에 따른 실명 등의 추가 입력 없이 서비스를 제공할 수 있습니다.</span>
							</li>
							<li>
								<span>3. 이용자는 쿠키설치에 대한 선택권이 있습니다. 웹브라우저의 옵션을 조정함으로써 모든 쿠키를 다 허용하거나 쿠키가 저장될 때 마다 확인을 거치거나, 아니면 모든 쿠키를 거부할 수 있는 선택권을 가집니다. 다만, 모든 쿠키의 저장을 거부하였을 경우 쿠키를 통해 회사에서 제공하는 서비스를 이용할 수 없게 됩니다.</span>
							</li>
						</ol>
						<hr>
						<h4>제10조 개인정보보호를 위한 기술 및 관리적 대책</h4>
						<p>코딩클럽은 이용자의 개인정보를 취급함에 있어 개인정보가 분실, 도난, 누출, 변조 또는 훼손되지 않도록 안전성 확보를 위하여 다음과 같은 기술적, 관리적 대책을 강구하고 있습니다.</p>
						<ol>
							<li>
								<span>1. 기술적 대책</span>
								<ol>
									<li><span>(1) 이용자의 비밀번호는 암호와 처리되어 운영자도 회원 개개인의 비밀번호를 알 수 없도록 되어 있습니다.</span></li>
									<li><span>(2) 허용되지 않은 IP에 대한 접근 권한을 두어 회사 내부 네트워크가 아닌 경우 회사의 서버로 접근이 불가능하게 되어 있습니다. 또한 허용되지 않은 포트에 대한 접근 금지 등 시스템 보안에 최선을 다하고 있습니다.</span></li>
									<li><span>(3) 코딩클럽은 암호알고리즘을 이용하여 네트워크 상의 개인정보를 안전하게 전송할 수 있는 보안장치(SSL)를 채택하고 있습니다. 보안접속 여부는 회원이 홈페이지상에서 일반접속/보안접속을 선택하여 이용할 수 있도록 되어 있습니다.</span></li>
									<li><span>(4) 코딩클럽은 W3C(World Web Consortium)에서 표준으로 정한 P3P를 통하여 개인정보보호정책을 이용자의 브라우저를 통해 알려주고 있습니다. 이용자는 회사의 이용약관을 P3P 소프트웨어(인터넷 익스플로러)를 통하여 확인하고 손쉽게 정보제공 수준을 결정할 수 있습니다(인터넷 익스플로러 6.0 이상에서 지원).</span></li>
								</ol>
							</li>
							<li>
								<span>2. 관리적 대책</span>
								<ol>
									<li>(1) 개인정보관리책임자와 최소한 인원으로 구성된 별도의 부서를 마련하여 개인정보에 대한 접근권한을 제한하고 있습니다.</li>
									<li>(2) 개인정보를 취급하는 직원을 대상으로 새로운 보안 기술 습득 및 개인정보보호 의무 등에 관해 정기적인 사내교육 및 외부 위탁교육을 실시하고 있습니다.</li>
									<li>(3)개인정보 관련 취급자의 업무인수인계는 보안이 유지된 상태에서 철저하게 이루어지고 있으며, 입사 및 퇴사 후 개인정보 사고에 대한 책임을 명확하게 하고 있습니다.</li>
								</ol>
							</li>
						</ol>
						<hr>
						<h4>제11조 개인정보 관리책임자</h4>
						<p>코딩클럽은 개인정보에 대한 의견 수렴 및 불만처리를 담당하는 개인정보 관리책임자를 지정하고 있습니다.</p>
						<hr>
						<h4>제12조 광고성 정보 수신에 대한 동의</h4>
						<ol>
							<li>
								<span>1. 광고성 정보 수신 동의의 목적</span>
								<p>관련법규에 따라 교육 프로그램, 서비스, 참가비 안내 등 코딩클럽이 보내는 모든 정보가 광고성으로 분류되어 이용자의 수신 동의가 필요합니다. 이용자는 코딩클럽 회원가입 및 서비스 신청 (신청서 작성 포함)을 함으로써 광고성 정보 수신에 동의하게 됩니다.</p>
							</li>
							<li>
								<span>2. 광고성 정보 수신 동의 기간과 갱신</span>
								<p>광고성 정보 수신의 동의 기간은 회원가입 및 신청서 작성 후 지속되며 해당 기간 동안 코딩클럽의 서비스 (교육 프로그램 안내 포함) 등에 대한 관련 정보를 제공받게 됩니다. 이용자의 요청에 따라 광고성 정보 수신 동의에 대한 철회가 가능합니다.</p>
								<ul>
									<li>- 보존 근거 : 정보통신망 이용 촉진 및 정보보호 등에 관한 법률</li>
									<li>- 보존 기간 : 광고성 정보 수신에 대한 동의 후 2년</li>
								</ul>
							</li>
						</ol>
						<hr>
						<h4>제13조 초상권 사용 동의</h4>
						<p>이용자 (코딩클럽 회원 및 신청자, 참가자 포함)가 코딩클럽의 서비스를 참여할 때 이용자 (회원 및 신청자, 참가자 포함)의 사진, 영상 및 프로젝트 결과물 등이 코딩클럽 활동에 활용될 수 있습니다.</p>
						<hr>
						<h4>부칙</h4>
						<p>이용자 (코딩클럽 회원 및 신청자, 참가자 포함)가 코딩클럽의 서비스를 참여할 때 이용자 (회원 및 신청자, 참가자 포함)의 사진, 영상 및 프로젝트 결과물 등이 코딩클럽 활동에 활용될 수 있습니다.</p>
					</div>

				</div>

			</div>
			<!-- 마이페이지 :: e -->

		</section>
		<!-- contents :: e -->
	</section>
	<!-- container :: e -->

</body>



<!--/form-->
</html>
