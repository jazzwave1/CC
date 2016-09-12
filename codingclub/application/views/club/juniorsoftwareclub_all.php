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

  <!-- 주니어소프트웨어클럽 CSS -->
  <link href="<?=SURL?>/css/jusocl.css" rel="stylesheet">
  
  <!-- 커스텀 스타일 -->
  <link rel="stylesheet" href="<?=SURL?>/css/reset.css">
  <link rel="stylesheet" href="<?=SURL?>/css/common.css">
  <link rel="stylesheet" href="<?=SURL?>/css/member.css">
  
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
          <a class="navbar-brand" href="./"><strong>주니어</strong>소프트웨어클럽</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
            <li><a href="<?=JHOSTURL?>/club/juniorsoftware#jusocl_about">주니어소프트웨어클럽이란?</a></li>
            <li><a href="<?=JHOSTURL?>/club/juniorsoftware#jusocl_ongoing">모집중</a></li>
            <li><a href="<?=JHOSTURL?>/club/juniorsoftware#jusocl_contents">프로그램</a></li>
            <li><a href="http://codingclubs.org">코딩클럽</a></li>
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

      <!-- 주니어소프트웨어클럽 프로그램 상세 :: s -->
      <div class="jusocl_detail">

        <!-- 프로그램 인트로 :: s -->
        <div class="program_intro">
          <div class="media">
            <img src="<?=SURL?>img/temp/img_jusocl_intro.jpg">
          </div>
          <div class="p_intro">
            <div class="p_intro_box">
              <span class="p_category">주니어소프트웨어클럽</span>
              <span class="p_name">2016 가을학기 프로그램</span>
              <p class="p_desc1">MIT 스크래치, 네이버 엔트리로 애니메이션, 게임, 뮤직비디오 등을 친구들과 함께 직접 만드는 주니어메이커, 주니어디자이너, 주니어해커 3개과정 중 첫 번째 입문 프로그램</p>
              <div class="p_intro_btn">
                <button id="bReqProgram" class="btn_bg_bgblue">신청하기</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 프로그램 상세 내용 :: s -->
        <div class="program_detail">
          <div class="container">
            <div class="p_detail">
              <div class="pd_head">2016<br>가을학기 안내</div>
              <div class="pd_body">
                <table class="tbl_summary">
                  <caption>가을학기</caption>
                  <colgroup>
                    <col class="sum_title" />                   
                    <col class="sum_cont" />
                  </colgroup>
                  <tbody>
                    <tr>
                      <th scope="row">모집인원/<br>대상</th>                       
                      <td>초중고생 20명 (참가비 납입 기준 선착순)</td>
                    </tr>
                    <tr>
                      <th scope="row">일정/장소</th>                       
                      <td>5주간 총 20시간<br><br><strong>1-4주</strong>&nbsp;부트캠프 단계별 프로젝트 / 광진구 세종대학교<br><strong>5주</strong>&nbsp;데모데이 (발표/시연회) / 디캠프 (역삼동 683-34)</td>
                    </tr>
                    <tr>
                      <th scope="row">참가방법</th>                      
                      <td><strong>참가비</strong>&nbsp;20만원 (참가비납입 신한은행 110-203-879580 )<br><strong>참가신청</strong>&nbsp;www.codingclubs.org / contact.codingclub@gmail.com<br><strong>문의</strong>&nbsp;010-3245-8095</td>
                    </tr>
                    <tr>
                      <th scope="row">DEMO_DAY</th>                      
                      <td>가을학기 주니어소프트웨어클럽 프로그램 참가자들이 직접 소프트웨어를 만들면서 배우고 고민하고 느낀 경험과 스스로 만든 작품을 공유하고 축하하는 가을학기 발표회<br>12월 3일 토요일 / 총 4시간 / 디캠프 6층</td>
                    </tr>
                    <tr>
                      <th scope="row">주차안내</th>                      
                      <td>주차지원이 되지 않으므로 대중교통 또는 인근 공영주차장 이용 부탁드립니다.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="p_detail">
              <div class="pd_head">주니어메이커</div>
              <div class="pd_body">
                <p>MIT 스크래치, 네이버 엔트리로 애니메이션, 게임, 뮤직비디오를 친구들과 함께 직접 만드는 주니어메이커, 주니어디자이너, 주니어해커 3개 과정 중 첫번째 입문 프로그램</p>
                <ul>
                  <li>10/1 ~ 10/22 매주 토요일 (4주) + 12/3(토) 데모데이(1주)</li>
                  <li>10시-14시 / 5주간 총 20시간 / 세종대</li>
                </ul>
              </div>
            </div>
            <div class="p_detail">
              <div class="pd_head">주니어디자이너</div>
              <div class="pd_body">
                <p>MIT 스크래치, 네이버 엔트리로 애니메이션, 게임, 뮤직비디오를 친구들과 함께 직접 만드는 주니어메이커, 주니어디자이너, 주니어해커 3개 과정 중 두번째 중급 프로그램</p>
                <ul>
                  <li>10/1 ~ 10/22 매주 토요일 (4주) + 12/3(토) 데모데이(1주)</li>
                  <li>10시-14시 / 5주간 총 20시간 / 세종대</li>
                </ul>
              </div>
            </div>
            <div class="p_detail">
              <div class="pd_head">앱메이커</div>
              <div class="pd_body">
                <p>MIT 앱인벤터로 친구들과 함께 직접 다양한 안드로이드앱을 디자인하고 만드는 앱메이커, 앱디자이너, 앱해커 3개 과정 중 첫번째 입문 프로그램</p>               <ul>
                  <li>11/5 ~ 11/26 매주 토요일 (4주) + 12/3(토) 데모데이(1주)</li>
                  <li>10시-14시 / 5주간 총 20시간 / 세종대</li>
                </ul>
              </div>
            </div>
            <div class="p_detail">
              <div class="pd_head">앱디자이너</div>
              <div class="pd_body">
                <p>MIT 앱인벤터로 친구들과 함께 직접 다양한 안드로이드앱을 디자인하고 만드는 앱메이커, 앱디자이너, 앱해커 3개 과정 중 첫번째 입문 프로그램</p>               <ul>
                  <li>10/1 ~ 10/22 매주 토요일 (4주) + 12/3(토) 데모데이(1주)</li>
                  <li>10시-14시 / 5주간 총 20시간 / 세종대</li>
                </ul>
              </div>
            </div>
            <div class="p_detail">
              <div class="pd_head">IoT메이커</div>
              <div class="pd_body">
                <p>친구들과 함께 내 손안의 컴퓨터로 세상과 소통하는 사물인터넷 제품을 직접 만드는 IoT 메이커, IoT디자이너, IoT해커 3개 과정 중 첫번째 입문 프로그램</p>            <ul>
                  <li>11/5 ~ 11/26 매주 토요일 (4주) + 12/3(토) 데모데이(1주)</li>
                  <li>10시-14시 / 5주간 총 20시간 / 세종대</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- 주니어소프트웨어클럽 프로그램 :: s -->
      <div class="jusocl_program">

        <!-- 프로그램 인트로 :: s -->
        <div class="program_intro">
          <div class="media"></div>
          <div class="p_intro_wh">
            <div class="p_intro_box_wh">
              <span class="p_category">스크래치/엔트리로</span>
              <span class="p_name">디지털콘텐츠 만들기</span>
              <p class="p_desc1">MIT 스크래치, 네이버 엔트리로 애니메이션, 게임, 뮤직비디오 등을 친구들과 함께 직접 만드는 주니어메이커, 주니어디자이너, 주니어해커 3개과정 프로그램</p>
              <span class="p_character01"></span>
            </div>
          </div>
        </div>

        <!-- 프로그램 :: s -->
        <div class="program_desc">
          <div class="container">
            <div class="p_tool">
              <div class="p_toollist">
                <span class="p_tool_title">스크래치란?</span>
                <span class="p_tool_img"><img src="<?=SURL?>/img/layout/scratch.jpg" alt="스크래치"></span>
                <div class="p_tool_desc">
                  <ul>
                    <li>MIT Media Lab의 Lifelong Kindergarden Group Mitch Rescnick교수팀에서 개발한 프로그램 언어</li>
                    <li>150개국 학교 및 교육기관에서 프로그래밍/ 컴퓨터과학 기초 교육에 사용 (초중고 및 하버드대 컴퓨터과학입문 교육과정 적용)</li>
                    <li>그래픽기반 교육용프로그래밍 언어. 블록 맞추기 형태로, 어린이 및 초보자도 쉽게 코딩 가능</li>
                    <li>스토리, 게임, 그림 통해 언어능력, 창의적 사고, 체계적 추론, 문제해결 방법 학습</li>
                  </ul>
                </div>
              </div>
              <div class="p_toollist">
                <span class="p_tool_title">엔트리란?</span>
                <span class="p_tool_img"><img src="<?=SURL?>/img/layout/entry.jpg" alt="엔트리"></span>
                <div class="p_tool_desc">
                  <ul>
                    <li>상상했던 것을 블록 놀이하듯 하나씩 쌓으며 게임, 애니메이션, 미디어아트를 만들 수 있는 교육용프로그램 </li>
                    <li>재밌게 배우는 학습공간: 컴퓨터를 통한 사고력과 문제해결력을 키워주는 놀이형식의 교육컨텐츠 제공</li>
                    <li>창작의 즐거움: MIT의 스크래치 Scratch 와 같은 비주얼 프로그래밍 언어를 사용, 프로그래밍을 처음 접하는 사람들도 쉽게 배울 수 있도록 디자인</li>
                    <li>공유와 협업: 엔트리를 통해 제작한 작품을 다른 사람들과 쉽게 공유하고 공동 창작도 가능</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="p_roadmap">
            <?php 
              if($aJunior['maker']['oCourseInfo'])
              {
            ?> 
              <div class="p_roadmap_detail">
                <div class="pd_head">
                  <span class="sub_en">Junior Maker</span>
                  <span class="main_kr">주니어메이커</span>
                </div>
                <div class="pd_body">
                  <p><?=$aJunior['maker']['oCourseInfo']->content?></p>
                  <ul>
                  <?php
                    foreach($aJunior['maker']['oCourseInfo']->content_long as $key=>$val)
                    {
                      echo "<li>".$val."</li>\n";
                    }
                  ?>
                  </ul>
                  <div class="pd_boty_btn">
                    <button id="bSangseView_JM" value="<?=$aJunior['maker']['bSangse']['sTargetURL']?>" class="btn_lineblue" <?=$aJunior['maker']['bSangse']['bViewState']?>><?=$aJunior['maker']['bSangse']['bTitle']?></button>
                    <button id="bReq_JM" value="<?=$aJunior['maker']['bReq']['sTargetURL']?>" class="btn_bgblue" <?=$aJunior['maker']['bReq']['bViewState']?>><?=$aJunior['maker']['bReq']['bTitle']?></button>
                  </div>
                </div>
              </div>
             <?php
              }
              if($aJunior['designer']['oCourseInfo'])
              {
             ?> 
              <div class="p_roadmap_detail">
                <div class="pd_head">
                  <span class="sub_en">Junior Designer</span>
                  <span class="main_kr">주니어디자이너</span>
                </div>
                <div class="pd_body">
                  <p><?=$aJunior['designer']['oCourseInfo']->content?></p>
                  <ul>
                  <?php
                    foreach($aJunior['designer']['oCourseInfo']->content_long as $key=>$val)
                    {
                      echo "<li>".$val."</li>\n";
                    }
                  ?> 
                  </ul>
                  <div class="pd_boty_btn">
                    <button id="bSangseView_JD" value="<?=$aJunior['designer']['bSangse']['sTargetURL']?>" class="btn_lineblue" <?=$aJunior['designer']['bSangse']['bViewState']?>><?=$aJunior['designer']['bSangse']['bTitle']?></button>
                    <button id="bReq_JD" value="<?=$aJunior['designer']['bReq']['sTargetURL']?>" class="btn_bgblue" <?=$aJunior['designer']['bReq']['bViewState']?>><?=$aJunior['designer']['bReq']['bTitle']?></button>
                  </div>
                </div>
              </div>
              <?php
              }
              if($aJunior['hacker']['oCourseInfo'])
              {
              ?> 
              <div class="p_roadmap_detail">
                <div class="pd_head">
                  <span class="sub_en">Junior Hacker</span>
                  <span class="main_kr">주니어해커</span>
                </div>
                <div class="pd_body">
                  <p><?=$aJunior['hacker']['oCourseInfo']->content?></p>
                  <ul>
                  <?php
                    foreach($aJunior['hacker']['oCourseInfo']->content_long as $key=>$val)
                    {
                      echo "<li>".$val."</li>\n";
                    }
                  ?>
                  </ul>
                  <div class="pd_boty_btn">
                    <button id="bSangseView_JH" value="<?=$aJunior['hacker']['bSangse']['sTargetURL']?>" class="btn_lineblue" <?=$aJunior['hacker']['bSangse']['bViewState']?>><?=$aJunior['hacker']['bSangse']['bTitle']?></button>
                    <button id="bReq_JH" value="<?=$aJunior['hacker']['bReq']['sTargetURL']?>" class="btn_bgblue" <?=$aJunior['hacker']['bReq']['bViewState']?>><?=$aJunior['hacker']['bReq']['bTitle']?></button>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>

      </div>  
      

      <!-- 주니어소프트웨어클럽 프로그램 :: s -->
      <div class="jusocl_program">

      <!-- 프로그램 인트로 :: s -->
      <div class="program_intro">
        <div class="media"></div>
        <div class="p_intro_wh">
        <div class="p_intro_box_wh">
          <span class="p_category">앱인벤터로</span>
          <span class="p_name">앱 만들기</span>
          <p class="p_desc1">MIT 앱인벤터로 친구들과 함께 직접 다양한 안드로이드앱을 디자인하고 만드는 앱메이커, 앱디자이너, 앱해커 3개 과정 프로그램</p>
          <span class="p_character02"></span>
        </div>
        </div>
      </div>

      <!-- 프로그램 :: s -->
      <div class="program_desc">
        <div class="container">
        <div class="p_tool">
          <div class="p_toollist">
          <span class="p_tool_title">앱인벤터란?</span>
          <span class="p_tool_img"><img src="http://member.codingclubs.org/static/img/layout/appinventer.jpg" alt="스크래치"></span>
          </div>
          <div class="p_toollist">
          <span class="p_tool_title"></span>
          <span class="p_tool_img"></span>
          <div class="p_tool_desc">
            <ul>
            <li>MIT 앱 인벤터 는 시각 , 드래그 앤 드롭 빌딩 블록으로 텍스트 기반 코딩의 복잡한 언어를 변환 프로그램과 응용 프로그램 제작 에 혁신적인 초보자 소개합니다.</li>
            <li>간단한 그래픽 인터페이스 보조금 도 미숙 한 초보자 시간 이내에 기본 , 완전한 기능을 응용 프로그램을 만들 수있는 능력 .  </li>
            </ul>
          </div>
          </div>
        </div>
        <div class="p_roadmap">
            <?php 
              if($aApp['maker']['oCourseInfo'])
              {
            ?> 
              <div class="p_roadmap_detail">
                <div class="pd_head">
                  <span class="sub_en">App Maker</span>
                  <span class="main_kr">앱메이커</span>
                </div>
                <div class="pd_body">
                  <p><?=$aApp['maker']['oCourseInfo']->content?></p>
                  <ul>
                  <?php
                    foreach($aApp['maker']['oCourseInfo']->content_long as $key=>$val)
                    {
                      echo "<li>".$val."</li>\n";
                    }
                  ?>
                  </ul>
                  <div class="pd_boty_btn">
                    <button id="bSangseView_AM" value="<?=$aApp['maker']['bSangse']['sTargetURL']?>" class="btn_lineblue" <?=$aApp['maker']['bSangse']['bViewState']?>><?=$aApp['maker']['bSangse']['bTitle']?></button>
                    <button id="bReq_AM" value="<?=$aApp['maker']['bReq']['sTargetURL']?>" class="btn_bgblue" <?=$aApp['maker']['bReq']['bViewState']?>><?=$aApp['maker']['bReq']['bTitle']?></button>
                  </div>
                </div>
              </div>
             <?php
              }
              if($aApp['designer']['oCourseInfo'])
              {
             ?> 
              <div class="p_roadmap_detail">
                <div class="pd_head">
                  <span class="sub_en">App Designer</span>
                  <span class="main_kr">앱디자이너</span>
                </div>
                <div class="pd_body">
                  <p><?=$aApp['designer']['oCourseInfo']->content?></p>
                  <ul>
                  <?php
                    foreach($aApp['designer']['oCourseInfo']->content_long as $key=>$val)
                    {
                      echo "<li>".$val."</li>\n";
                    }
                  ?> 
                  </ul>
                  <div class="pd_boty_btn">
                    <button id="bSangseView_AD" value="<?=$aApp['designer']['bSangse']['sTargetURL']?>" class="btn_lineblue" <?=$aApp['designer']['bSangse']['bViewState']?>><?=$aApp['designer']['bSangse']['bTitle']?></button>
                    <button id="bReq_AD" value="<?=$aApp['designer']['bReq']['sTargetURL']?>" class="btn_bgblue" <?=$aApp['designer']['bReq']['bViewState']?>><?=$aApp['designer']['bReq']['bTitle']?></button>
                  </div>
                </div>
              </div>
              <?php
              }
              if($aApp['hacker']['oCourseInfo'])
              {
              ?> 
              <div class="p_roadmap_detail">
                <div class="pd_head">
                  <span class="sub_en">App Hacker</span>
                  <span class="main_kr">앱해커</span>
                </div>
                <div class="pd_body">
                  <p><?=$aApp['hacker']['oCourseInfo']->content?></p>
                  <ul>
                  <?php
                    foreach($aApp['hacker']['oCourseInfo']->content_long as $key=>$val)
                    {
                      echo "<li>".$val."</li>\n";
                    }
                  ?>
                  </ul>
                  <div class="pd_boty_btn">
                    <button id="bSangseView_AH" value="<?=$aApp['hacker']['bSangse']['sTargetURL']?>" class="btn_lineblue" <?=$aApp['hacker']['bSangse']['bViewState']?>><?=$aApp['hacker']['bSangse']['bTitle']?></button>
                    <button id="bReq_AH" value="<?=$aApp['hacker']['bReq']['sTargetURL']?>" class="btn_bgblue" <?=$aApp['hacker']['bReq']['bViewState']?>><?=$aApp['hacker']['bReq']['bTitle']?></button>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
            </div>       
          
      <!-- 주니어소프트웨어클럽 프로그램 :: s -->
      <div class="jusocl_program">

      <!-- 프로그램 인트로 :: s -->
      <div class="program_intro">
        <div class="media"></div>
        <div class="p_intro_wh">
        <div class="p_intro_box_wh">
          <span class="p_category">아두이노/비트브릭/메이키메이키 로</span>
          <span class="p_name">피지컬콘텐츠 만들기</span>
          <p class="p_desc1">친구들과 함께 내 손안의 컴퓨터로 세상과 소통하는 사물인터넷 제품을 직접 만드는 IoT 메이커, IoT디자이너, IoT해커 3개과정 프로그램</p>
          <span class="p_character01"></span>
        </div>
        </div>
      </div>

      <!-- 프로그램 :: s -->
      <div class="program_desc">
        <div class="container">
        <div class="p_tool">
          <div class="p_toollist">
          <span class="p_tool_title">아두이노란?</span>
          <span class="p_tool_img"><img src="http://member.codingclubs.org/static/img/layout/arduino.jpg" alt="스크래치"></span>
          <div class="p_tool_desc">
            <ul>
            <li>오픈 소스를 기반으로 한 단일 보드 마이크로컨트롤러로 완성 된 보드(상품)와 관련 개발 도구 및 환경을 말한다</li>
            <li>아두이노는 다수의 스위치나 센서로부터 값을 받아들여, LED나 모터와 같은 외부 전자 장치들을 통제함으로써 환경과 상호작용이 가능한 물건을 만들어 낼 수 있다</li>
            <li>아두이노의 가장 큰 장점은 마이크로컨트롤러를 쉽게 동작시킬 수 있다는 것이다</li>
            </ul>
          </div>
          </div>
          <div class="p_toollist">
          <span class="p_tool_title">비트브릭이란?</span>
          <span class="p_tool_img"><img src="http://member.codingclubs.org/static/img/layout/bitbrick.jpg" alt="엔트리"></span>
          <div class="p_tool_desc">
            <ul>
            <li>비트브릭은 아이들이 만지고, 협동하고, 새로운 세상을 만들어낼 수 있게 해주는 최고의 친구입니다.</li>
            <li>비트(bit)+브릭(Brick)은 융합입니다.</li>
            <li>디지털 아날로구, 소프트웨어와 하드웨어를 섞고 연결하고 흔드는 창조적 도구입니다.</li>
            </ul>
          </div>
          </div>
        </div>
        <div class="p_roadmap">
            <?php 
              if($aIot['maker']['oCourseInfo'])
              {
            ?> 
              <div class="p_roadmap_detail">
                <div class="pd_head">
                  <span class="sub_en">IoT Maker</span>
                  <span class="main_kr">IoT메이커</span>
                </div>
                <div class="pd_body">
                  <p><?=$aIot['maker']['oCourseInfo']->content?></p>
                  <ul>
                  <?php
                    foreach($aIot['maker']['oCourseInfo']->content_long as $key=>$val)
                    {
                      echo "<li>".$val."</li>\n";
                    }
                  ?>
                  </ul>
                  <div class="pd_boty_btn">
                    <button id="bSangseView_IM" value="<?=$aIot['maker']['bSangse']['sTargetURL']?>" class="btn_lineblue" <?=$aIot['maker']['bSangse']['bViewState']?>><?=$aIot['maker']['bSangse']['bTitle']?></button>
                    <button id="bReq_IM" value="<?=$aIot['maker']['bReq']['sTargetURL']?>" class="btn_bgblue" <?=$aIot['maker']['bReq']['bViewState']?>><?=$aIot['maker']['bReq']['bTitle']?></button>
                  </div>
                </div>
              </div>
             <?php
              }
              if($aIot['designer']['oCourseInfo'])
              {
             ?> 
              <div class="p_roadmap_detail">
                <div class="pd_head">
                  <span class="sub_en">IoT Designer</span>
                  <span class="main_kr">IoT디자이너</span>
                </div>
                <div class="pd_body">
                  <p><?=$aIot['designer']['oCourseInfo']->content?></p>
                  <ul>
                  <?php
                    foreach($aIot['designer']['oCourseInfo']->content_long as $key=>$val)
                    {
                      echo "<li>".$val."</li>\n";
                    }
                  ?> 
                  </ul>
                  <div class="pd_boty_btn">
                    <button id="bSangseView_ID" value="<?=$aIot['designer']['bSangse']['sTargetURL']?>" class="btn_lineblue" <?=$aIot['designer']['bSangse']['bViewState']?>><?=$aIot['designer']['bSangse']['bTitle']?></button>
                    <button id="bReq_ID" value="<?=$aIot['designer']['bReq']['sTargetURL']?>" class="btn_bgblue" <?=$aIot['designer']['bReq']['bViewState']?>><?=$aIot['designer']['bReq']['bTitle']?></button>
                  </div>
                </div>
              </div>
              <?php
              }
              if($aIot['hacker']['oCourseInfo'])
              {
              ?> 
              <div class="p_roadmap_detail">
                <div class="pd_head">
                  <span class="sub_en">IoT Hacker</span>
                  <span class="main_kr">IoT해커</span>
                </div>
                <div class="pd_body">
                  <p><?=$aIot['hacker']['oCourseInfo']->content?></p>
                  <ul>
                  <?php
                    foreach($aIot['hacker']['oCourseInfo']->content_long as $key=>$val)
                    {
                      echo "<li>".$val."</li>\n";
                    }
                  ?>
                  </ul>
                  <div class="pd_boty_btn">
                    <button id="bSangseView_IH" value="<?=$aIot['hacker']['bSangse']['sTargetURL']?>" class="btn_lineblue" <?=$aIot['hacker']['bSangse']['bViewState']?>><?=$aIot['hacker']['bSangse']['bTitle']?></button>
                    <button id="bReq_IH" value="<?=$aIot['hacker']['bReq']['sTargetURL']?>" class="btn_bgblue" <?=$aIot['hacker']['bReq']['bViewState']?>><?=$aIot['hacker']['bReq']['bTitle']?></button>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
                    

    </section>
    <!-- contents :: e -->
  </section>
  <!-- container :: e -->
  <footer class="footer_service">
  <div class="footer_inner">
    <div class="s_copyright">© 2016 CODING CLUB. ALL RIGHTS RESERVED.</div>
    <div class="footer_util">
      <a href="http://member.codingclubs.org/Member/privacy" class="go_privacy">개인정보처리방침</a>
    </div>
  </div>
  </footer>


</body>
   <script>   
      $(function(){
        $('#bLogout').click(function(){
          window.location.replace("<?=HOSTURL?>/Login/Logout"); 
        });
        
        $('#bReqProgram').click(function(){
          window.location.href("<?=HOSTURL?>/member/reqprogram"); 
        });
     
        // junior 
        $('#bSangseView_JM').click(function(){
          window.location.href = $('#bSangseView_JM').val(); 
        });
        $('#bReq_JM').click(function(){
          window.location.href = $('#bReq_JM').val(); 
        });
        $('#bSangseView_JD').click(function(){
          window.location.href = $('#bSangseView_JD').val(); 
        });
        $('#bReq_JD').click(function(){
          window.location.href = $('#bReq_JD').val(); 
        });
        $('#bSangseView_JH').click(function(){
          window.location.href = $('#bSangseView_JH').val(); 
        });
        $('#bReq_JH').click(function(){
          window.location.href = $('#bReq_JH').val(); 
        });
        
        // app 
        $('#bSangseView_AM').click(function(){
          window.location.href = $('#bSangseView_AM').val(); 
        });
        $('#bReq_AM').click(function(){
          window.location.href = $('#bReq_AM').val(); 
        });
        $('#bSangseView_AD').click(function(){
          window.location.href = $('#bSangseView_AD').val(); 
        });
        $('#bReq_AD').click(function(){
          window.location.href = $('#bReq_AD').val(); 
        });
        $('#bSangseView_AH').click(function(){
          window.location.href = $('#bSangseView_AH').val(); 
        });
        $('#bReq_AH').click(function(){
          window.location.href = $('#bReq_AH').val(); 
        });
        
        // iot 
        $('#bSangseView_IM').click(function(){
          window.location.href = $('#bSangseView_IM').val(); 
        });
        $('#bReq_IM').click(function(){
          window.location.href = $('#bReq_IM').val(); 
        });
        $('#bSangseView_ID').click(function(){
          window.location.href = $('#bSangseView_ID').val(); 
        });
        $('#bReq_ID').click(function(){
          window.location.href = $('#bReq_ID').val(); 
        });
        $('#bSangseView_IH').click(function(){
          window.location.href = $('#bSangseView_IH').val(); 
        });
        $('#bReq_IH').click(function(){
          window.location.href = $('#bReq_IH').val(); 
        });


      });
   </script>   




<!--/form-->
</html>

