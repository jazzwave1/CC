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
<meta property="og:image" content="<?=SURL?>img/layout/ms-icon-310x310.png" />
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
            <li><a href="<?=HOSTURL?>/club/juniorsoftware#jusocl_about">주니어소프트웨어클럽이란?</a></li>
            <li><a href="<?=HOSTURL?>/club/juniorsoftware#jusocl_ongoing">모집중</a></li>
            <li><a href="<?=HOSTURL?>/club/juniorsoftware#jusocl_contents">프로그램</a></li>
            <li><a href="<?=HOSTURL?>">코딩클럽</a></li>
            <li class="my_page"><a href="<?=HOSTURL?>/member/mypage">마이페이지</a></li>
            <li class="sign_out" id="bLogout"><a href="#">로그아웃</a></li>
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
            <img src="<?=SURL?>/img/temp/img_jusocl_intro.jpg">
          </div>
          <div class="p_intro">
            <div class="p_intro_box">
              <span class="p_category">주니어소프트웨어클럽</span>
              <span class="p_name"><?=$oCourseInfo?$oCourseInfo->name:"&nbsp;"?></span>
              <p class="p_desc1"><?=$oCourseInfo?$oCourseInfo->content:"&nbsp;"?></p>
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
              <div class="pd_head">요약보기</div>
              <div class="pd_body">
                <table class="tbl_summary">
                  <caption>요약보기</caption>
                  <colgroup>
                    <col class="sum_title" />                   
                    <col class="sum_cont" />
                  </colgroup>
                  <tbody>
                    <tr>
                      <th scope="row">일정</th>                      
                      <td><?=$oCourseInfo?$oCourseInfo->schedule:"&nbsp;"?></td>
                    </tr>
                    <tr>
                      <th scope="row">대상</th>                      
                      <td><?=$oCourseInfo?$oCourseInfo->target:"&nbsp;"?></td>
                    </tr>
                    <tr>
                      <th scope="row">장소</th>                      
                      <td><?=$oCourseInfo?$oCourseInfo->location:"&nbsp;"?></td>
                    </tr>
                    <tr>
                      <th scope="row">준비물</th>                      
                      <td><?=$oCourseInfo?$oCourseInfo->need:"&nbsp;"?></td>
                    </tr>
                    <tr>
                      <th scope="row">후원</th>                      
                      <td><?=$oCourseInfo?$oCourseInfo->sponsor:"&nbsp;"?></td>
                    </tr>
                    <tr>
                      <th scope="row">참가비</th>                      
                      <td><?=$oCourseInfo?$oCourseInfo->recruit:"&nbsp;"?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="p_detail">
              <div class="pd_head">소개</div>
              <div class="pd_body">
                <ul>
                <?php
                  foreach($oCourseInfo->content_long as $key=>$val)
                  {
                    echo "<li>".$val."</li>\n"; 
                  }
                ?>
                </ul>
              </div>
            </div>
            <div class="p_detail">
              <div class="pd_head">대상</div>
              <div class="pd_body">
                <ul>
                <?php
                  foreach($oCourseInfo->target_long as $key=>$val)
                  {
                    echo "<li>".$val."</li>\n"; 
                  }
                ?>
                </ul>
              </div>
            </div>
            <div class="p_detail">
              <div class="pd_head">학습안내</div>
              <div class="pd_body">
              <?php
                  foreach($oCourseInfo->guide_long as $key=>$val)
                  {
                    echo $val."\n"; 
                  }
                ?>
              </div>
            </div>
            <div class="p_detail">
              <div class="pd_head">위치</div>
              <div class="pd_body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1581.617204393575!2d127.07264405821694!3d37.54954072147811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca4da9852d451%3A0x88fdd375e16419cb!2z7ISc7Jq47Yq567OE7IucIOq1sOyekOuPmSDshLjsooXrjIDtlZnqtZAg6rWw7J6Q6rSA!5e0!3m2!1sko!2skr!4v1473216344861" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.9989745903754!2d127.04290801555167!3d37.50794233523883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca4092dfbb341%3A0x7670c10b207aef1d!2z65SU7Lqg7ZSE!5e0!3m2!1sko!2skr!4v1473216550953" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>

        <!-- fixed 버튼 :: s -->
        <div class="footer_fixed">
          <div class="btn_fixed">
            <button id="bReqProgram2" class="btn_bg_bgblue">신청하기</button>
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
        
        $('#bReqProgram').click(function(){
          window.location.replace("<?=HOSTURL?>/member/reqprogram/<?=$oCourseInfo->idx?>"); 
        });
        $('#bReqProgram2').click(function(){
          window.location.replace("<?=HOSTURL?>/member/reqprogram/<?=$oCourseInfo->idx?>"); 
        });


      });
   </script>   


</body>



<!--/form-->
</html>

