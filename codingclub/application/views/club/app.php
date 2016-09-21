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
          <a class="navbar-brand" href="<?=JHOSTURL?>/club/juniorsoftware"><strong>주니어</strong>소프트웨어클럽</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
            <li><a href="<?=JHOSTURL?>/club/juniorsoftware#jusocl_about">주니어소프트웨어클럽이란?</a></li>
            <li><a href="<?=JHOSTURL?>/club/juniorsoftware#jusocl_ongoing">모집중</a></li>
            <li><a href="<?=JHOSTURL?>/club/juniorsoftware#jusocl_contents">프로그램</a></li>
            <li><a href="http://codingclubs.org" target='_blank'>코딩클럽</a></li>
            <li class="sign_in" style="<?=$aJoinStyle['join']?>"><a href="<?=HOSTURL?>/member/memberJoinAccount?burl=club/juniorsoftware">회원가입</a></li>
            <li class="my_page" style="<?=$aJoinStyle['mypage']?>"><a href="<?=HOSTURL?>/Member/mypage">마이페이지</a></li>
            <li class="sign_up" style="<?=$aLoginStyle['login']?>"><a href="<?=HOSTURL?>/Login?burl=club/app">로그인</a></li>
            <li class="sign_out" id="bLogout" style="<?=$aLoginStyle['logout']?>" ><a href="#">로그아웃</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <!-- container :: s -->
  <section id="container">

    <!-- contents :: s -->
    <section id="contents">

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
              <span class="p_character01"></span>
            </div>
          </div>
        </div>

        <!-- 프로그램 :: s -->
        <div class="program_desc">
          <div class="container">
            <div class="p_tool">
              <div class="p_toollist">
                <span class="p_tool_title">앱인벤터란?</span>
                <span class="p_tool_img"><img src="<?=SURL?>/img/layout/appinventer.jpg" alt="스크래치"></span>
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
              if($aJunior['maker']['oCourseInfo'])
              {
            ?> 
              <div class="p_roadmap_detail">
                <div class="pd_head">
                  <span class="sub_en">App Maker</span>
                  <span class="main_kr">앱메이커</span>
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
                    <button id="bSangseView_M" value="<?=$aJunior['maker']['bSangse']['sTargetURL']?>" class="btn_lineblue" <?=$aJunior['maker']['bSangse']['bViewState']?>><?=$aJunior['maker']['bSangse']['bTitle']?></button>
                    <button id="bReq_M" value="<?=$aJunior['maker']['bReq']['sTargetURL']?>" class="btn_bgblue" <?=$aJunior['maker']['bReq']['bViewState']?>><?=$aJunior['maker']['bReq']['bTitle']?></button>
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
                  <span class="sub_en">App Designer</span>
                  <span class="main_kr">앱디자이너</span>
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
                    <button id="bSangseView_D" value="<?=$aJunior['designer']['bSangse']['sTargetURL']?>" class="btn_lineblue" <?=$aJunior['designer']['bSangse']['bViewState']?>><?=$aJunior['designer']['bSangse']['bTitle']?></button>
                    <button id="bReq_D" value="<?=$aJunior['designer']['bReq']['sTargetURL']?>" class="btn_bgblue" <?=$aJunior['designer']['bReq']['bViewState']?>><?=$aJunior['designer']['bReq']['bTitle']?></button>
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
                  <span class="sub_en">App Hacker</span>
                  <span class="main_kr">앱해커</span>
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
                    <button id="bSangseView_H" value="<?=$aJunior['hacker']['bSangse']['sTargetURL']?>" class="btn_lineblue" <?=$aJunior['hacker']['bSangse']['bViewState']?>><?=$aJunior['hacker']['bSangse']['bTitle']?></button>
                    <button id="bReq_D" value="<?=$aJunior['hacker']['bReq']['sTargetURL']?>" class="btn_bgblue" <?=$aJunior['hacker']['bReq']['bViewState']?>><?=$aJunior['hacker']['bReq']['bTitle']?></button>
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
      $('#bSangseView_M').click(function(){
        window.location.href = $('#bSangseView_M').val(); 
      });
      $('#bReq_M').click(function(){
        window.location.href = $('#bReq_M').val(); 
      });
      $('#bSangseView_D').click(function(){
        window.location.href = $('#bSangseView_D').val(); 
      });
      $('#bReq_D').click(function(){
        window.location.href = $('#bReq_D').val(); 
      });
      $('#bSangseView_H').click(function(){
        window.location.href = $('#bSangseView_H').val(); 
      });
      $('#bReq_H').click(function(){
        window.location.href = $('#bReq_H').val(); 
      });
    });
</script>
<!--/form-->
</html>

