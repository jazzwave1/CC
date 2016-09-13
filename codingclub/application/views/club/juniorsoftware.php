<!doctype html>
<html lang="utf-8">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="코딩클럽" />
<meta name="description" content="코딩클럽 홈페이지입니다." />
<meta name="keywords" content="코딩클럽" />
<meta name="viewport" content="width=device-width, initial-scale=1.0 ,maximum-scale=1.0, minimum-scale=1.0,user-scalable=no,target-densitydpi=medium-dpi" />

<meta name="format-detection" content="telephone=no">
<meta property="og:url" content="http://codingclubs.org" />
<meta property="og:title" content="코딩 클럽" />
<meta property="og:image" content="<?=SURL?>/img/layout/ms-icon-310x310.png" />
<meta property="og:description" content="코딩클럽은 프로그래밍, 컴퓨터과학, 정보과학, 소프트웨어 교육, 창작에 관심있는 모든 분들을 위한 열린 커뮤니티입니다. 프로그래밍 교육에 관심있는 학부모, 선생님들이 서로 정보, 의견을 공유하는 공간입니다. 아울러 코딩클럽에서는 어린이, 청소년을 위한 각 지역 코딩클럽을 설립, 운영하고, 함께 교육하고 배울 수 있는 프로그램을 제공합니다." />

<link rel="shortcut icon" href="<?=SURL?>/img/layout/android-icon-36x36.png"  />

<title itemprop="name">주니어소프트웨어클럽 | 코딩클럽</title>

  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  <!-- 커스텀 스타일 -->
  <link rel="stylesheet" href="<?=SURL?>/css/reset.css">
  <link rel="stylesheet" href="<?=SURL?>/css/common.css">
  <link rel="stylesheet" href="<?=SURL?>/css/member.css">
  
  <!-- 주니어소프트웨어클럽 CSS -->
  <link href="<?=SURL?>/css/jusocl.css" rel="stylesheet">
 
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
<body id="wrapper" class="basic_pg pg_jusocl">

  <nav class="navbar  navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?=JHOSTURL?>/club/juniorsoftware"><strong>주니어</strong>소프트웨어클럽</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right" >
          <li><a href="#jusocl_about">주니어소프트웨어클럽이란?</a></li>
          <li><a href="#jusocl_ongoing">모집중</a></li>
          <li><a href="#jusocl_contents">프로그램</a></li>
          <li><a href="http://codingclubs.org" target="_blank">코딩클럽</a></li>
          <li class="sign_in" style="<?=$aJoinStyle['join']?>"><a href="<?=HOSTURL?>/member/memberJoinAccount?burl=club/juniorsoftware">회원가입</a></li>
          <li class="my_page" style="<?=$aJoinStyle['mypage']?>"><a href="<?=HOSTURL?>/Member/mypage">마이페이지</a></li>
          <li class="sign_up" style="<?=$aLoginStyle['login']?>"><a href="<?=HOSTURL?>/Login?burl=club/juniorsoftware">로그인</a></li>
          <li class="sign_out" id="bLogout" style="<?=$aLoginStyle['logout']?>" ><a href="#">로그아웃</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <!-- container :: s -->
  <section id="container">

    <!-- contents :: s -->
    <section id="contents">

      <!-- 주니어소프트웨어클럽 :: s -->
      <div class="jusocl">


        <!-- 모집중인 프로그램 :: s -->
        <div class="features" id="jusocl_ongoing">
          <div class="container">
            <div class="f_tit">
              <span class="f_tit_head">FEATURES</span>
              <span class="f_tit_sub">모·집·중·인·프·로·그·램</span>
            </div>
            <div class="f_jusocl">
              <div class="f_jusocl_sub">주니어소프트웨어클럽</div>
              <div class="f_jusocl_title"><strong>2016</strong><br>가을학기<br>프로그램</div>
              <div class="f_jusocl_btn"><a href="<?=HOSTURL?>/club/juniorsoftwareall">자세히보기</a></div>
            </div>
            <div class="f_jusocl_box b1">
              <div class="f_jusocl_box_tit"><strong>주니어</strong>메이커</div>
              <div class="f_jusocl_box_sub">MIT 스크래치, 네이버 엔트리로<br>디지털콘텐츠를 만드는<br>첫 번째 입문 프로그램</div>
              <div class="f_jusocl_box_date">10/1 ~ 10/22 매주 (토) + 12/3(토) 데모데이</div>
              <div class="f_jusocl_box_btn"><a href="<?=$aProgramURL['juniormaker']?>">신청하기</a></div>
            </div>
            <div class="f_jusocl_box b2">
              <div class="f_jusocl_box_tit"><strong>주니어</strong>디자이너</div>
              <div class="f_jusocl_box_sub">MIT 스크래치, 네이버 엔트리로<br>디지털콘텐츠를 만드는<br>두 번째 중급 프로그램</div>
              <div class="f_jusocl_box_date">10/1 ~ 10/22 매주 (토) + 12/3(토) 데모데이</div>
              <div class="f_jusocl_box_btn"><a href="<?=$aProgramURL['juniordesigner']?>">신청하기</a></div>
            </div>
            <div class="f_jusocl_box b3">
              <div class="f_jusocl_box_tit"><strong>앱</strong>메이커</div>
              <div class="f_jusocl_box_sub">MIT 앱인벤터로 친구들과 함께 직접 <br>다양한 안드로이드앱을 디자인하고 <br>만드는 앱메이커, 앱디자이너, 앱해커 3개 과정 중 첫번째 입문 프로그램</div>
              <div class="f_jusocl_box_date">11/5 ~ 11/26  매주 (토) + 12/3(토) 데모데이</div>
              <div class="f_jusocl_box_btn"><a href="<?=$aProgramURL['appmaker']?>">신청하기</a></div>
            </div>
            <div class="f_jusocl_box b4">
              <div class="f_jusocl_box_tit"><strong>앱</strong>디자이너</div>
              <div class="f_jusocl_box_sub">MIT 앱인벤터로 친구들과 함께 직접 <br>다양한 안드로이드앱을 디자인하고 <br>만드는 앱메이커, 앱디자이너, 앱해커 3개 과정 중 두번째 중급 프로그램</div>
              <div class="f_jusocl_box_date">10/1 ~ 10/22 매주 (토) + 12/3(토) 데모데이</div>
              <div class="f_jusocl_box_btn"><a href="<?=$aProgramURL['appdesigner']?>">신청하기</a></div>
            </div>
            <div class="f_jusocl_box b5">
              <div class="f_jusocl_box_tit"><strong>IoT</strong>메이커</div>
              <div class="f_jusocl_box_sub">내 손안의 컴퓨터로 세상과 소통하는<br>사물인터넷 제품을 직접만드는<br>IoT 메이커, IoT디자이너, IoT해커<br> 3개과정 중 첫 번째 입문 프로그램</div>
              <div class="f_jusocl_box_date">11/5 ~ 11/26  매주 (토) + 12/3(토) 데모데이</div>
              <div class="f_jusocl_box_btn"><a href="<?=$aProgramURL['iotmaker']?>">신청하기</a></div>
            </div>
            <div class="f_event_grey hackerthon_soon">
              <div class="f_event_sub">2016 제2회 코딩클럽 해커톤</div>
              <div class="f_event_title"><strong>CODE</strong>PLAY</div>
              <div class="f_event_catchphrase">상상해海서 아이디魚를 건지다</div>
              <div class="f_event_date">2016.10.22</div>
            </div>
          </div>
        </div>


        <!-- 주니어소프트웨어클럽이란? :: s -->
        <div class="jusocl_about" id="jusocl_about">
          <div class="j_about_media"></div>
          <div class="j_about_cont">
            <div class="container">
              <div class="j_about">
                <div class="j_txt_head">
                  <span class="h_kr"><strong>주니어</strong><br>소프트웨어<br>클럽이란?</span>
                  <span class="h_en">Junior<br>Software Club</span>
                </div>
                <div class="j_txt_body">
                  <div class="j_desc">
                    <span class="pc"><strong>주니어소프트웨어클럽</strong>은 <br>친구들과 함께 직접 원하는 컨텐츠를 디자인하고, <br>애니메이션/ 게임/ 앱/ 웹과 같은 소프트웨어로 만들어보는 <br>즐거운 코딩클럽 주니어들을 위한 디지털창작모임입니다!<br><br>주니어소프트웨어클럽 활동은 <br>담임선생님 한명이 소규모 모둠 (4-6명)을 담당, 다양한 팀프로젝트를 중심으로 진행되며, <br>주니어소프트웨어클럽 멤버에게는 코딩클럽 청년샘의 1:1 멘토링이 제공됩니다.</span>
                    <span class="mobile">주니어소프트웨어클럽은 친구들과 함께 직접 원하는 컨텐츠를 디자인하고, 애니메이션/ 게임/ 앱/ 웹과 같은 소프트웨어로 만들어보는 즐거운 코딩클럽 주니어들을 위한 디지털창작모임입니다!<br><br>주니어소프트웨어클럽 활동은 담임선생님 한명이 소규모 모둠 (4-6명)을 담당, 다양한 팀프로젝트를 중심으로 진행되며, 주니어소프트웨어클럽 멤버에게는 코딩클럽 청년샘의 1:1 멘토링이 제공됩니다.</span>
                  </div>
                  <div class="jusocl_img">
                    <img src="<?=SURL?>/img/layout/img_jusocl_about.png" alt="주니어소프트웨어클럽">
                  </div>              
                </div>
              </div>
              <div class="jusocl_vision">
                <dl>
                  <dt>Vision</dt>
                  <dd>
                    <span>소프트웨어를 통해 문제를 정의하고, 해결하고, 직접 찾은 솔루션을 소프트웨어 컨텐츠로 만들고 친구들과 나의 생각을 나누는 창작, 공유 활동에 집중</span>
                    <span>언플러그드, 디자인 활동을 통해 컴퓨터과학(조건, 반복, 함수 등)의 개념 및 원리 체화</span>
                    <span>디지털식 문제 해결 방법의 이해, 컴퓨터적 사고 / 창의적 디자인 역량 강화</span>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
        </div>

        <!-- 프로그램 :: s -->
        <div class="jusocl_contents" id="jusocl_contents">
          <div class="container">
            <div class="j_contents_head">프로그램</div>
            <ul class="j_contents_list">
              <li class="p_digital">
                <a href="<?=JHOSTURL?>/club/junior">
                  <span><i>스크래치/엔트리로</i><br>디지털콘텐츠<br>만들기</span>
                  <p>MIT 스크래치, 네이버 엔트리로 나만의 디지털 컨텐츠를 만드는 프로그램</p>
                </a>
              </li>
              <li class="p_app">
                <a href="<?=JHOSTURL?>/club/app">
                  <span><i>앱인벤터로</i><br>앱만들기</span>
                  <p>MIT 앱인벤터로 <br>안드로이드앱을 만드는 <br>프로그램</p>
                </a>
              </li>
              <li class="p_iot">
                <a href="<?=JHOSTURL?>/club/iot">
                  <span>IOT<br>만들기</span>
                  <p>친구들과 함께 내 손안의 <br>컴퓨터로 세상과 소통하는 <br>사물인터넷 제품을 직접 만드는 프로그램</p>
                </a>
              </li>
              <li class="p_web">
                <a href="#" onclick="javascript:alert('준비중입니다');">
                  <span>웹<br>만들기</span>
                  <p>Codecademy <br>코드카데미와 함께 <br>웹서비스를 만드는 프로그램!</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>      

    </section>
    <!-- contents :: e -->
  </section>
  <!-- container :: e -->
   <script>   
      $(function(){
        $('#bLogout').click(function(){
          window.location.replace("<?=HOSTURL?>/Login/Logout"); 
        });
      });
   </script>   

  <footer class="footer_service">
  <div class="footer_inner">
    <div class="s_copyright">© 2016 CODING CLUB. ALL RIGHTS RESERVED.</div>
    <div class="footer_util">
      <a href="http://member.codingclubs.org/Member/privacy" class="go_privacy">개인정보처리방침</a>
    </div>
  </div>
  </footer>


</body>



<!--/form-->
</html>

